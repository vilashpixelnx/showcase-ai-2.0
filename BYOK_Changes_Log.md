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
- "14-Day Money Back Guarantee" / "14-day no-risk guarantee" → **30-Day** everywhere (hero, guarantee section, FAQ, all buy boxes, including commented-out lines).
- `assets/images/money_back.png` and `assets/images/money_back_white.png` — these badge graphics have "14 DAY..." baked into the image pixels, so a text find-replace couldn't fix them. The user manually re-exported/edited both PNGs to say 30-day. **Each other page folder has its own separate copy of this file** (`pro/`, `agency/`, `traffic-suite/`, `ai-mastery/` each have `assets/images/money_back.png`; `bundle/` does not have this file at all) — when working on those pages, check whether their copies still say 14-day and flag it to the user rather than assuming they're already fixed.

### JVZoo → launchpad cleanup
- All `href="https://www.jvzoo.com/b/115339/432067/1"` (and bundle variant) → `href="#"` placeholder (real checkout link TBD from user).
- 2 JVZoo-hosted image buttons (`i.jvzoo.com` graphic, Frontend box + Bundle box inside the big compare box) → replaced with normal site-style text CTA buttons (`animated_btn fe_green_big_btn ...`), since those were literal JVZoo branded graphics, not just links.
- Footer legal disclaimer paragraph: removed the "JVZoo® / BBC Systems Inc." trademark paragraph, replaced with generic wording: *"We want to clarify that our official checkout platform serves as the retailer for the products featured on this site. The role of the retailer does not constitute an endorsement, approval, or review of these products or any claims, statements, or opinions used in their promotion."*

### "Unlimited" badge-row redesign (applies to every CTA/buy block on a page)
In every buy box (`fe_buy_section` ×7, `fe_main_buy_section` ×2 on live), the "Test Drive Policy: 30-Day Money Back Guarantee" line was **not deleted** — it was HTML-commented out (`<!-- -->`) and replaced with a checkmark badge row placed right after the CTA button:

```html
<div class="d-flex flex-wrap justify-content-center align-items-center gap-4 ...">
    <span class="{dark-color|white-color} w700 ..."><img loading="lazy" src="./assets/images/final_buy/green_right.png" alt="image" class="fe_badge_icon"> No monthly fees</span>
    <span class="{dark-color|white-color} w700 ..."><img loading="lazy" src="./assets/images/final_buy/green_right.png" alt="image" class="fe_badge_icon"> No credit limits</span>
    <span class="{dark-color|white-color} w700 ..."><img loading="lazy" src="./assets/images/final_buy/green_right.png" alt="image" class="fe_badge_icon"> One-time payment</span>
</div>
<!--
<h2 class="...">Test Drive Policy: 30-Day Money Back Guarantee</h2>
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
- 14-Day / 14 Day / 14-day guarantee → 30-Day everywhere (4x Test Drive Policy line, guarantee heading, guarantee body paragraph).
- JVZoo main buy button (`i.jvzoo.com` image button) → text CTA button (`animated_btn fe_green_big_btn ...`), `href="#"` placeholder.
- JVZoo legal disclaimer paragraph → same generic wording as live page.
- "No thanks" skip link (`jvzoo.com/nothanks/432083`, sends to next OTO) → `href="#"` placeholder for now — **still needs the real next-offer URL** once the launchpad funnel flow is defined.
- All 3 "Test Drive Policy: 30 Day Money Back Guarantee" CTA blocks → same badge-row treatment as live (comment out the line, add ✅ No monthly fees / No credit limits / One-time payment checkmark row using `fe_badge_icon`). Pro's own "One Time Investment | No Monthly Fees" pill headline was left alone — it's already short and has no credit language, doesn't need the live page's longer-sentence rewrite.
- No FAQ or comparison table exists on this page — no BYOK-disclosure Q&A needed here (disclosure already lives on the live/FE page).
- Noted but NOT fixed (out of scope, pre-existing bug): a `fbq('track','Purchase', ...)` conversion pixel fires unconditionally near the top of `<body>` on every page load, not just after an actual purchase.

### `agency/` (OTO2) — ShowcaseAI Agency Plus
- Remove: "additional 500 Credits at once", "additional 100 Credits per month."
- Keep real features: Fashion/Try-On videos, unlimited fashion avatars, social scheduler, 20-client workspace, commercial/agency license.
- Pricing: lead with $97 one-time, keep $27/mo as softer alt — reconcile with new launchpad price ladder.

### `traffic-suite/` (OTO3) — ShowcaseAI Traffic Suite
- Remove: "Use your included credits."
- Reframe as extra AI MODELS (BYOK): *"Unlock & connect the top premium models — Seedance, Kling 2.1, Sora 2, Flux 2 Pro, GPT-Image, Seedream — with your own keys, so it's genuinely unlimited."*
- Its existing "Unlimited Creative Variations" claim becomes true under BYOK — lean into it.

### `ai-mastery/` (OTO4) — ShowcaseAI AI Mastery
- Remove/change: "No third-party dependencies" — directly contradicts BYOK, drop it.
- "Generate unlimited videos" becomes true under BYOK — keep/lean into it.
- 1-on-1 coaching (first 50) — fine as a small launch bonus, user's call.

### `bundle/` — ShowcaseAI Bundle
- Remove: "1,000 Total Credits Across the Entire Bundle."
- Reframe: *"Everything unlocked — unlimited creation across every tool, with your own AI access. One payment. No credits. No monthly."*
- Anchor: prefer honest subscription-savings anchor over inflated "$4,997" value claim.

### Cross-page (all 6 pages)
- Only Agency currently shows a price ($97) — set FE + all OTO prices from the new launchpad ladder once available.
- Swap all buy-links/retailer references to launchpad; remove/de-index old JVZoo pages.
