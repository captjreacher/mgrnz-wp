<?php
/**
 * Template Name: MGRNZ Landing (Hero + Sidebar)
 * Description: Two-column hero with aligned sidebar. Uses global site header/footer.
 */

get_header();
?>

<main id="primary" class="site-main mgrnz-landing">

  <section class="mgrnz-hero-wrap">
    <div class="mgrnz-hero-inner">
      <div class="mgrnz-hero-grid">

        <!-- ================= LEFT: HERO ================= -->
        <div class="mgrnz-hero-main">

          <p class="mgrnz-landing-eyebrow">MGRNZ · Maximised AI</p>

          <h1 class="mgrnz-landing-title">
            Let’s Make AI Great Again
          </h1>

          <p class="mgrnz-landing-lead">
            Practical AI, automation and systems for real businesses — not another
            “10 tools you must try” list. Start with smarter workflows, not more noise.
          </p>

          <ul class="mgrnz-landing-list">
            <li>Map and fix the bottlenecks in your current processes.</li>
            <li>Use AI to support your team — not override your judgment.</li>
            <li>Deploy automation that sticks in day-to-day operations.</li>
          </ul>

          <div class="mgrnz-landing-cta hero-subscribe">
            <a href="javascript:void(0)"
               class="hero-subscribe-btn ml-onclick-form"
               onclick="ml('show', 'qyrDmy', true)">
              Join the newsletter
            </a>

            <a href="/services"
               class="hero-subscribe-btn"
               style="background:#ffffff;color:#ff4f00;">
              View services
            </a>
          </div>

        </div>
        <!-- =============== /LEFT ================= -->


        <!-- ================= RIGHT: SIDEBAR ================= -->
        <aside class="mgrnz-hero-sidebar">
          <h2>Start With One Small Win</h2>
          <p>
            Drop your email and I’ll send a short breakdown of 3 ways AI can
            save you hours a week based on real client workflows.
          </p>

          <div class="hero-subscribe">
            <a href="javascript:void(0)"
               class="hero-subscribe-btn ml-onclick-form"
               onclick="ml('show', 'qyrDmy', true)">
              Show me the playbook
            </a>
          </div>

          <p style="font-size:0.82rem;color:rgba(255,255,255,0.6);margin:0;">
            Already using AI? Even better — we’ll refine what you’ve already got.
          </p>
        </aside>
        <!-- =============== /RIGHT ================= -->

      </div>
    </div>
  </section>

</main>

<?php
get_footer();
