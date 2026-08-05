# ShowcaseAI → BYOK Relaunch — Changes Reference

Source doc: `ShowcaseAi_Page_BYOK_Review.html`
Purpose: track exactly what was changed on `live/` (Frontend page — DONE) so the same
pattern/wording/rules can be applied consistently to the remaining pages:
`pro/` (OTO1) → `agency/` (OTO2) → `traffic-suite/` (OTO3) → `ai-mastery/` (OTO4) → `bundle/`.

Relaunch context:
- New launch date: **6 August 2026, 10:00 AM EST**
- New hosting: `https://showcaseai.pixalab.ai/` (subfolders like `/prelaunch/`, `/live/`, `/pro/`, etc.)
- Old JVZoo listing/retailer is being fully retired — no old references should remain.
- Workflow: one page at a time, confirm every add/remove with the user before applying.
- **Guarantee period is 14 Days — final.** All 6 pages were briefly changed to a 30-Day guarantee
  during the BYOK pass, then explicitly reverted back to 14-Day on 2026-07-28 per user decision.
  Every "→ 30-Day" note below describes something that was tried and then undone — the current,
  correct text on every page is **14-Day / 14-day / 14 Day**. Don't change this to 30 again without
  being told to.

---

## 1. Global rules (apply to every remaining page)

1. **Kill all "credit" language.** BYOK = buyer connects their own AI access = unlimited.
   Never sell "more credits" as a tier differentiator — differentiate by features/quality instead.
2. **Add the "unlimited" angle** wherever a page says "no monthly fee":
   e.g. "No monthly fees. No credit limits. Create as much as you want."
3. **Soft on the mechanism, honest in the FAQ.** Don't lead with "bring your own API key" — lead
   with the outcome (unlimited). Disclose the BYOK mechanism clearly in exactly one place: the FAQ.
   Never write "free / pennies per video" until real AI-usage cost is confirmed.
4. **No old JVZoo remnants** — buy links, retailer disclaimer text, branded JVZoo button images —
   since hosting/checkout is changing.
5. **No em dashes (—) in copy — use a plain hyphen (-) instead.** The user replaced every em dash
   with a plain hyphen across all the new/changed copy on `live` (this repo has had UTF-8 encoding
   issues before — see git history "some utf character issue"). Write all new copy on other pages
   with plain hyphens from the start, don't use em dashes at all.

---

## 2. `live/index.html` — completed changes

### Added
- Hero: a sub-tagline H2 was added right under the main H1 (*"Unlimited product videos. No credits. No monthly fees. No limits - ever."*) but **the user later commented it out** (`<!-- ... -->`, line ~98) — it's kept in the markup but currently hidden. Instead, that same line now replaces the old "Test Drive Policy: 14-Day Money Back Guarantee" text further down in the hero (line ~112, still an `<h1 class="fe_banner_title2 ...">`) — the guarantee-text line is gone from the hero entirely; the money-back **image** badge right below it stays and is doing that job visually now (see image note below).
- Hero: small italic punch line under the main CTA button — *"Stop renting AI by the credit. Own the studio that makes the videos."*
- New short section right after the hero — *"Most AI video tools ration you with credits, then bill you monthly. ShowcaseAI doesn't. You're connected straight to the AI - so there's nothing to meter and nothing to renew."*
- Step #1 (4-step process): added note — *"One-time quick setup - about 2 minutes, and we walk you through every step."*
- Comparison table: new row — *"Unlimited creation - no credit limits"* (ShowcaseAI ✅ / Other tools ❌) — remember to also add a matching checkmark icon in the `sp_tool_table_right` icon list so row counts stay aligned.
- FAQ: new Q&A (BYOK disclosure) — Q: *"Do I need to connect anything?"* A: *"Yes - a quick one-time connection to your own AI account, so creation stays truly unlimited and you pay cost, not a marked-up monthly plan. ~2 minutes, we show you exactly how."*

### Changed / Removed
- "We're Going Monthly Soon" urgency section → replaced with *"This Launch Price Won't Stay This Low"* / *"This launch price rises with every batch of buyers - what you see now is the lowest it'll ever be."*
- "No Monthly Fee Ever - Get Instant Access for a One-Time Payment!" (repeated ~9x) → replaced with: *"You only ever pay for your own AI usage, billed directly by the provider - never a markup from us."* Final styling differs by block type:
  - In the 7 `fe_buy_section` blocks: given its own bigger, bolder treatment — `class="primary-color w700 xxl28 xl27 lg26 md25 sm24 xs23 zs22 xsmb2 zsmb2 zsmb6"` with a `<br>` after "billed directly" so it wraps as two lines.
  - In the 2 `fe_main_buy_box_footer` blocks (Frontend/Bundle compare box): kept the original size/class, just bumped `w400` → `w500` (no color change, no `<br>`).
- Bundle-teaser box "More Video Creation Credits" (Pro preview line) → *"HD, Watermark-Free Exports & Priority Rendering"*
- "14-Day Money Back Guarantee" / "14-day no-risk guarantee" text was changed to 30-Day everywhere (hero, guarantee section, FAQ, all buy boxes, including commented-out lines), then **reverted back to 14-Day on 2026-07-28** (see the guarantee-period note at the top of this doc) — current text is 14-Day again.
- `assets/images/money_back.png` and `assets/images/money_back_white.png` — these badge graphics have the guarantee day-count baked into the image pixels, so a text find-replace can't touch them. The user manually re-exported/edited both PNGs to say 30-day during the (now-reverted) 30-Day attempt. **⚠️ Open inconsistency:** since the guarantee text is back to 14-Day but these two image files were never re-reverted, `live/`'s badge images currently still visually show "30 Day" while the surrounding text says "14-Day" — these need to be re-exported back to 14-day to match. **Each other page folder has its own separate copy of this file** (`pro/`, `agency/`, `traffic-suite/`, `ai-mastery/` each have `assets/images/money_back.png`; `bundle/` does not have this file at all) — those were never touched/re-exported at all, so they should still correctly say 14-day already.

### JVZoo → launchpad cleanup
- All `href="https://www.jvzoo.com/b/115339/432067/1"` (and bundle variant) → `href="#"` placeholder (real checkout link TBD from user).
- 2 JVZoo-hosted image buttons (`i.jvzoo.com` graphic, Frontend box + Bundle box inside the big compare box) → replaced with normal site-style text CTA buttons (`animated_btn fe_green_big_btn ...`), since those were literal JVZoo branded graphics, not just links.
- Footer legal disclaimer paragraph: removed the "JVZoo® / BBC Systems Inc." trademark paragraph, replaced with generic wording: *"We want to clarify that our official checkout platform serves as the retailer for the products featured on this site. The role of the retailer does not constitute an endorsement, approval, or review of these products or any claims, statements, or opinions used in their promotion."*

### "Unlimited" badge-row redesign (applies to every CTA/buy block on a page)
In every buy box (`fe_buy_section` ×7, `fe_main_buy_section` ×2 on live), the "Test Drive Policy: 14-Day Money Back Guarantee" line was **not deleted** — it was HTML-commented out (`<!-- -->`) and replaced with a checkmark badge row placed right after the CTA button:

```html
<div class="d-flex flex-wrap justify-content-center align-items-center gap-4 ...">
    <span class="{dark-color|white-color} w700 ..."><img loading="lazy" src="./assets/images/final_buy/green_right.png" alt="image" class="fe_badge_icon"> No monthly fees</span>
    <span class="{dark-color|white-color} w700 ..."><img loading="lazy" src="./assets/images/final_buy/green_right.png" alt="image" class="fe_badge_icon"> No credit limits</span>
    <span class="{dark-color|white-color} w700 ..."><img loading="lazy" src="./assets/images/final_buy/green_right.png" alt="image" class="fe_badge_icon"> One-time payment</span>
</div>
<!--
<h2 class="...">Test Drive Policy: 14-Day Money Back Guarantee</h2>
-->
```
- Use `dark-color` text on light-bg sections, `white-color` on `dark-bg` sections.
- Use `fe_badge_icon` (20px) in normal buy sections, `fe_badge_icon_sm` (18px) in the big compare-box footer (`fe_main_buy_box_footer`) variant — smaller because that box's own type scale is smaller.
- Icon used: `./assets/images/final_buy/green_right.png` (already a green circular checkmark, matches the reference design).

### CSS added (`assets/css/style.css`, near the "final buy section" comment block)
```css
.fe_badge_icon {
    width: 20px;
    height: auto;
}
.fe_badge_icon_sm {
    width: 18px;
    height: auto;
}
```
(User changed `height` from a fixed px value to `auto` so the icon can't distort if it's not perfectly square.)
Use these classes instead of inline `style="width:...px;height:...px;"` on any new badge icons.

---

## 3. Still pending on `live/index.html` (asked, not yet confirmed/applied)
- [ ] Typo: `>div & Sharing Options` → should be `Export & Sharing Options` (line ~2843, "Production Quality & Output" feature list).
- [ ] CTA trim: "Get Instant Access to ShowcaseAI" button currently repeats ~9 times down the page — review suggested trimming to ~5-6. Not yet reduced.

---

## 4. Open inputs still needed from user (same answers likely apply to other pages too)
- Real checkout/buy link (currently `#` placeholder everywhere on live).
- Final launchpad pricing per page (live page currently shows no explicit number; only Agency page shows $97 pre-BYOK).
- Whether the 6 Aug 2026 10:00 AM EST launch date needs to appear anywhere on-page (e.g. a countdown) — so far no page has had an existing date/countdown to update.

---

## 5. Per-page progress

### `pro/index.html` (OTO1) — ShowcaseAI Pro — DONE (2026-07-27)
- Hero subhead: "Unlock higher creation limits & ultra-premium assets..." → "Unlock HD exports, priority rendering & ultra-premium assets to create studio-grade videos, test more styles, & deliver faster"
- "More Video Creation Credits" feature (appeared 3x: short grid card, detailed 3-paragraph block, comparison-list item) → renamed to "HD, Watermark-Free Exports & Priority Rendering" everywhere, with the detailed block's copy fully rewritten away from credit/limit framing to quality framing (full HD, no watermark, priority render queue). Its image `more_video.png` was **kept as-is** — user said don't touch it for now, no HD/quality-specific asset exists yet.
- "No thanks" downsell decline text: "...miss out on extra credits, templates..." → "...miss out on HD exports, priority rendering, templates..."
- 14-Day / 14 Day / 14-day guarantee → briefly changed to 30-Day everywhere (4x Test Drive Policy line, guarantee heading, guarantee body paragraph), then reverted back to 14-Day on 2026-07-28 — current text is 14-Day.
- JVZoo main buy button (`i.jvzoo.com` image button) → text CTA button (`animated_btn fe_green_big_btn ...`), `href="#"` placeholder.
- JVZoo legal disclaimer paragraph → same generic wording as live page.
- "No thanks" skip link (`jvzoo.com/nothanks/432083`, sends to next OTO) → `href="#"` placeholder for now — **still needs the real next-offer URL** once the launchpad funnel flow is defined.
- All 3 "Test Drive Policy: 14 Day Money Back Guarantee" CTA blocks → same badge-row treatment as live (comment out the line, add ✅ No monthly fees / No credit limits / One-time payment checkmark row using `fe_badge_icon`). Pro's own "One Time Investment | No Monthly Fees" pill headline was left alone — it's already short and has no credit language, doesn't need the live page's longer-sentence rewrite.
- No FAQ or comparison table exists on this page — no BYOK-disclosure Q&A needed here (disclosure already lives on the live/FE page).
- Noted but NOT fixed (out of scope, pre-existing bug): a `fbq('track','Purchase', ...)` conversion pixel fires unconditionally near the top of `<body>` on every page load, not just after an actual purchase.

### `agency/index.html` (OTO2) — ShowcaseAI Agency / Agency Plus — DONE (2026-07-27)
- Top "upgrade boxes" (6 boxes): Box #1 "Get 100 Extra Credits Every Month" → "Create Without Limits" / "No monthly cap on videos - create as much fashion, ad, and client content as your agency needs." (image kept as-is, same precedent as Pro's `more_video.png`). Boxes 2-6 (fashion/try-on, unlimited avatars, scheduling, templates, client workspace) were already credit-free, untouched.
- "Extra monthly credits so production never stalls or stops" → "No creation caps, so production never stalls or stops."
- 3-step "how it works" Step #1: "Use your monthly credits to generate..." → "Generate videos, ads, or fashion try-on content..., with no creation limits to work around."
- "No credit sharing hacks. No manual exports and uploads..." → "No shared-login workarounds. No manual exports and uploads..." (the "credit sharing" phrase was really about not needing shared logins/pooled accounts across a team, not about AI credits — reworded to keep that meaning without the word "credit").
- **Pricing cards** (this page sells two tiers side by side: Agency $27/month and Agency Plus $97 one-time, with otherwise IDENTICAL feature lists — only the credit amount differed: "100 Credits per month" vs "500 Credits at once"). Removed both, replaced with commitment-framing instead of a feature differentiator: $27/mo card → "Lower monthly commitment to get started"; $97 one-time card → "One payment. Done. No recurring charge." Both tiers otherwise keep the same real feature list (Fashion/Try-On videos, unlimited fashion avatars, social scheduler, 20-client workspace, templates).
- **Bug fix (unrelated to BYOK, found while reviewing):** the bottom "No thanks" downsell link was copy-pasted from the Pro page verbatim — it said "I don't want to unlock **Pro** features... miss out on extra credits... included in the **Pro** upgrade" on the Agency page. Fixed to say "Agency" and reference fashion videos / client workspaces / commercial license instead.
- 14-Day / 14-day / "14 ... Day" (one instance had the guarantee text split across lines with no hyphen) → briefly changed to 30-Day (4 occurrences), then reverted back to 14-Day on 2026-07-28.
- 2 JVZoo image buttons (Agency `432085`, Agency Plus `433389`) → text CTA buttons, `href="#"`.
- Nothanks skip link (`jvzoo.com/nothanks/432085`) → `href="#"` placeholder (same open item as Pro: needs the real next-offer URL later).
- Legal disclaimer paragraph → same generic wording as live/pro.
- All 4 "Test Drive Policy" CTA blocks (top hero, Agency card footer, Agency Plus card footer, bottom section) → same checkmark badge-row treatment as live/pro. Note: this page's asset path for the icon is `./assets/images/final_buy/green_right.png` (unlike `pro/`, which has it at the flat `./assets/images/green_right.png` with no `final_buy` folder) — **each page's asset layout differs, always verify the icon path exists per-page rather than assuming it matches the last page.**

### `traffic-suite/index.html` (OTO3) — ShowcaseAI Traffic Suite — DONE (2026-07-27)
- Nano Banana model description: "...ideal for high-volume creation without excessive credit usage" → "...without slowing you down."
- Guarantee-section testimonial line: "Use your included credits." → "Create without limits."
- "Unlimited Creative Variations Without Extra Tools or Subscriptions" section — kept as-is (already true, matches the review doc's "good news, lean into it") and added one reinforcing line: "You're connected straight to the AI models, so 'unlimited' here isn't a marketing word - it's genuinely how it works." This page already names the specific models (Nano Banana, Flux 2 Pro, Seedream 4.5, Seedance 1 Lite/Pro/Pro Fast, Kling 2.1, Sora2) in its own model-spotlight cards and comparison list, so no new model-list copy was needed — just the BYOK tie-in.
- **Dead code cleanup (not BYOK-related):** deleted an entire commented-out `<!-- -->` "No thanks" block that was leftover copy-pasted from the Pro page (still said "Pro upgrade" / "extra credits" inside the comment) — it never rendered, just removed the cruft. The real, active "No thanks, I'll Pass on the Traffic Suite" decline block already had correct Traffic-Suite-specific copy, no bug there.
- 14-Day / 14-day / 14 Day / "14 days" (guarantee heading, 2 body mentions, 4 CTA blocks) → briefly changed to 30-Day, then reverted back to 14-Day on 2026-07-28.
- JVZoo: header "Upgrade Now" link, main buy image-button, and the **live nothanks decline link** (`jvzoo.com/nothanks/432955` — easy to miss since the dead commented-out nothanks block nearby used a different, already-dead JVZoo ID) → all `href="#"`. Image-button replaced with a text CTA like other pages.
- Legal disclaimer paragraph → same generic wording as other pages.
- All 4 "Test Drive Policy" CTA blocks → checkmark badge-row. This page's stylesheet didn't have `.fe_badge_icon` yet (each page has its own separate `style.css`, this class isn't shared across pages) — added it to `traffic-suite/assets/css/style.css` near its own "final buy section" comment block, using `height: auto` per the live-page convention. Icon path here is `./assets/images/final_buy/green_right.png` (same as agency, different from pro).
- Also found and cleaned up a pre-existing empty `style=""` attribute on the nothanks heading (flagged by the linter, unrelated to BYOK, harmless but pointless).

### `ai-mastery/index.html` (OTO4) — ShowcaseAI AI Mastery — DONE (2026-07-27)
- No credit-language at all on this page (nothing to remove there).
- "No Third-Party Dependencies" contradicted BYOK in 5 spots:
  - A whole dedicated "Zero Third-Party" card (2nd of 6 in the `aa_mainFlow` cards section) → rewritten to "Unlimited Creation, Zero Limits" / "Manage everything from one centralized dashboard, with no monthly caps on what you can create." (image kept as-is).
  - AI Website Builder "Key Benefits" bullet → "Publish-ready pages, no extra hosting or plugins needed"
  - AI Image Generator "Key Benefits" bullet → "All-in-one dashboard, everything you need in one place"
  - AI Content Writer "Key Benefits" bullet → "No more writer's block, ever"
- **Structural issue found (not in the original review doc, caught while auditing):** two money-back badge images were hotlinked directly to the OLD live server — `src="https://sales.showcaseai.app/live/assets/images/money_back_white.png"` — instead of a local file. This page's own `assets/images/` only had `money_back.png` (no white variant). User added/confirmed the local image; both hotlinks were repointed to `assets/images/money_back.png`. That local image has "14 Days Money Back Guarantee" baked into the pixels — since the guarantee period is 14 days (final, see top-of-doc note), this image is already correct, no re-export needed.
- No FAQ changes needed (3 questions, none touch credits/dependencies/guarantee days).
- No text-based "Test Drive Policy" / day-count guarantee text exists on this page at all — the only guarantee reference is the image above and a generic non-day-specific "User-Friendly Experience Guarantee" card, so no 14→30 day text replacement was needed here.
- JVZoo main buy image-button → text CTA (using this page's own `aa_btn aa_darkbtn` class, not the `fe_green_big_btn` class used on other pages — each page has its own separate design system/CSS).
- Nothanks link and legal disclaimer paragraph → same cleanup pattern as other pages.
- 1-on-1 coaching bonus (first 50 customers) — left as-is per review doc ("fine as a small launch bonus, user's call") — not changed.

### `bundle/index.html` — ShowcaseAI Bundle — DONE (2026-07-27)
This is the biggest/most complex page (4-product recap: Pro, Agency Plus, Traffic Suite, AI Mastery, each with its own feature list + "Worth $X/Month, Sold For $Y" value-stack box, then one combined final offer box).
- Pro section had a **broken line** (grammar bug, not just BYOK): "You get an additional Credits to create even more" (missing the credit-count number entirely) → rewritten to "You get HD, watermark-free exports & priority rendering" (matches the Pro-page reframe used elsewhere).
- Main bundle box: "1,000 Total Credits Across the Entire Bundle (All Offers Combined)" → "Everything Unlocked - Unlimited Creation Across Every Tool (All Offers Combined, No Credits, No Monthly)", per the review doc's suggested copy.
- Final pricing anchor: "Worth: ~~$4,997 Per Year~~" / "Retail Price: ~~$997 Per Year~~" / "Current Price: Low One-Time Fee!" → collapsed to "Buy Separately: ~~4 Monthly Subscriptions~~" / "Bundle Price: One Low One-Time Payment!". Deliberately did **not** invent a new specific dollar total — the page's own per-product "Worth $X/Month" numbers are inconsistent/messy (one missing a `$` sign, one where "Sold For" is higher than "Worth"), so fabricating a precise combined figure from them would just compound existing data-quality problems. Same caution as the "don't claim pennies-per-video until real cost is confirmed" rule — don't invent dollar totals either.
- Left the 5 individual per-product "Worth $X/Month, Sold For $Y" value-stack boxes untouched — normal bundle-stacking copy, not what the review doc's "$4,997 anchor" note was about.
- 14-Day / 14-day / 14 Day / "14 days" → briefly changed to 30-Day (including 2 instances inside already-dead commented-out blocks, changed anyway for consistency), then all reverted back to 14-Day on 2026-07-28.
- JVZoo main buy image-button → text CTA using this page's own `sp_dev_btn_animation` button class (yet another distinct per-page button class - live/pro/agency/traffic-suite use `fe_green_big_btn`, ai-mastery uses `aa_btn aa_darkbtn`, bundle uses `sp_dev_btn_animation`. **Always check what CTA button class a page already uses elsewhere before adding a new "Get Instant Access" button — don't assume any prior page's class name carries over.**)
- Legal disclaimer paragraph → same generic wording as other pages.
- **Not touched (left for user decision, still pending):** three fully commented-out/dead blocks that never render: (1) an entire leftover JV/affiliate header nav (old "Get Affiliate Link" JVZoo link, Bonuses/JV Contest/Swipes/Jv Doc links to old Google Docs, an old guarantee box), (2) a whole unrelated **"MotoAi"** section — copy-pasted from some other, completely different product's template and never renamed, (3) a commented-out FAQ accordion section. All three are dead code with zero effect on the live page; only worth removing for file cleanliness, not functionality. User said "okay" to the main plan but this cleanup wasn't explicitly confirmed — ask before deleting.

### Cross-page (all 6 pages) — remaining follow-ups
- Only Agency currently shows real prices ($27/mo, $97 one-time) — every other page's CTA is price-less ("One-Time Investment", "No Monthly Fees" style headlines with no number). Set real launchpad prices everywhere once the price ladder is finalized.
- All `href="#"` placeholders (buy buttons, nothanks/downsell links) across `pro/`, `agency/`, `traffic-suite/`, `ai-mastery/`, `bundle/` still need the real launchpad checkout URLs.
- `live/` is done: the user added the real checkout as a launchpadjv `forgeContainer` embed (`data-offer="435"`) in the two `id="main_buy_btn"` boxes (Frontend recap box `data-page="3534"`, Bundle recap box `data-page="3539"` — note both boxes share the literal id `main_buy_btn`, a pre-existing duplicate-ID issue, not something introduced here). Every other "Get Instant Access to ShowcaseAI" button on `live/` (9 total, header + hero + all `fe_buy_section` CTAs) now points to `href="#main_buy_btn"` to scroll down to that real embed instead of being its own placeholder link. Only the 2 site logo links legitimately still say `href="#"`.
- Guarantee period is confirmed 14 days (final). Guarantee-badge PNGs (`money_back.png` / `money_back_white.png`) on `pro/`, `agency/`, `traffic-suite/`, and `ai-mastery/` already correctly say "14 Day" in the pixels, no action needed. **Only `live/`'s two copies are wrong** — they were manually re-exported to say "30-day" during the reverted attempt and still need to be re-exported back to 14-day to match the (already-reverted) text on that page.
- Dead/leftover code spotted along the way (JV/affiliate nav, MotoAi section, commented FAQ on `bundle/`; a stray unconditional `fbq('track','Purchase', ...)` pixel on `pro/`) — flagged per-page above, none fixed yet, all optional cleanup pending user's call.
