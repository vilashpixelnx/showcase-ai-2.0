(function () {
  "use strict";

  // Shared registration handler for all webinar forms on this page.
  // Same endpoint / payload shape as the central PixelNX script, but this
  // local version supports multiple forms on the page.
  const FORM_ENDPOINT = "https://pixelnx.com/webinar-registration/webinar-registration.php";
  const EMAIL_RE = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  const forms = document.querySelectorAll("form[data-smart-form]");
  if (!forms.length) return;

  function setError(input, errorEl, message) {
    if (!input || !errorEl) return;
    if (message) {
      input.classList.add("invalid");
      errorEl.textContent = message;
    } else {
      input.classList.remove("invalid");
      errorEl.textContent = "";
    }
  }

  forms.forEach((form) => {
    const success = form.nextElementSibling && form.nextElementSibling.classList.contains("form-success")
      ? form.nextElementSibling
      : null;
    if (!success) return;

    const firstInput = form.querySelector('input[name="first_name"]');
    const lastInput = form.querySelector('input[name="last_name"]');
    const emailInput = form.querySelector('input[name="email"]');
    const firstError = form.querySelector(".first-name-error");
    const lastError = form.querySelector(".last-name-error");
    const emailError = form.querySelector(".email-error");
    const submitError = form.querySelector(".submit-error");
    const submitBtn = form.querySelector(".form-submit, button[type='submit']");
    const submitBtnHTML = submitBtn ? submitBtn.innerHTML : "";
    const thankyouUrl = form.dataset.thankyouUrl || "";

    if (!firstInput || !lastInput || !emailInput) return;

    form.addEventListener("submit", async (e) => {
      e.preventDefault();

      const first = firstInput.value.trim();
      const last = lastInput.value.trim();
      const email = emailInput.value.trim();
      let valid = true;

      if (first.length < 2) {
        setError(firstInput, firstError, "Please enter your first name.");
        valid = false;
      } else {
        setError(firstInput, firstError, "");
      }

      if (last.length < 2) {
        setError(lastInput, lastError, "Please enter your last name.");
        valid = false;
      } else {
        setError(lastInput, lastError, "");
      }

      if (!EMAIL_RE.test(email)) {
        setError(emailInput, emailError, "Please enter a valid email address.");
        valid = false;
      } else {
        setError(emailInput, emailError, "");
      }

      if (!valid) {
        if (submitError) submitError.textContent = "Please fix the highlighted fields.";
        return;
      }

      if (submitError) submitError.textContent = "";
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = "Submitting...";
      }

      try {
        const jsonData = JSON.stringify(Object.fromEntries(new FormData(form)));
        const response = await fetch(FORM_ENDPOINT, {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: jsonData,
        });

        const res = await response.json();

        if (res.status === true) {
          form.style.display = "none";
          success.classList.add("show");
          if (thankyouUrl) {
            window.setTimeout(() => {
              window.location.href = thankyouUrl;
            }, 1500);
          }
        } else {
          if (submitError) submitError.textContent = res.msg || "Submission failed. Please try again.";
        }
      } catch (error) {
        console.error("Lead-sync error:", error);
        if (submitError) submitError.textContent = "Network error. Please try again.";
      } finally {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = submitBtnHTML;
        }
      }
    });

    [firstInput, lastInput, emailInput].forEach((input) => {
      input.addEventListener("input", () => {
        input.classList.remove("invalid");
        const errorEl = input === firstInput ? firstError : input === lastInput ? lastError : emailError;
        if (errorEl) errorEl.textContent = "";
        if (submitError) submitError.textContent = "";
      });
    });
  });
})();
