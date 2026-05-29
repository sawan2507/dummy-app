<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#0b1020" />
    <title>Coming Soon</title>
    <meta name="description" content="We’re working on something new. Stay tuned." />

    <style>
      :root{
        --bg1:#070b18;
        --bg2:#0b1020;
        --card:#0f1733cc;
        --border:#22305a;
        --text:#e9edff;
        --muted:#aab4e0;
        --accent:#7c5cff;
        --accent2:#22d3ee;
        --shadow: 0 20px 70px rgba(0,0,0,.45);
        --radius: 18px;
      }
      *{box-sizing:border-box}
      html,body{height:100%}
      body{
        margin:0;
        font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji","Segoe UI Emoji";
        color:var(--text);
        background:
          radial-gradient(1200px 800px at 20% 20%, rgba(124,92,255,.35), transparent 60%),
          radial-gradient(900px 700px at 85% 25%, rgba(34,211,238,.28), transparent 55%),
          radial-gradient(900px 900px at 60% 95%, rgba(236,72,153,.18), transparent 60%),
          linear-gradient(160deg, var(--bg1), var(--bg2));
        display:flex;
        align-items:center;
        justify-content:center;
        padding:24px;
      }
      .shell{
        width:min(980px, 100%);
      }
      .brand{
        display:flex;
        align-items:center;
        gap:12px;
        margin-bottom:18px;
      }
      .logo{
        width:44px;height:44px;border-radius:14px;
        background: linear-gradient(135deg, var(--accent), var(--accent2));
        box-shadow: 0 10px 30px rgba(124,92,255,.25);
        position:relative;
        overflow:hidden;
      }
      .logo:after{
        content:"";
        position:absolute; inset:-30%;
        background: radial-gradient(circle at 30% 30%, rgba(255,255,255,.45), transparent 55%);
        transform: rotate(18deg);
      }
      .brand h1{
        font-size:16px;
        margin:0;
        font-weight:650;
        letter-spacing:.2px;
        color:var(--muted);
      }

      .card{
        border:1px solid rgba(34,48,90,.7);
        background: linear-gradient(180deg, rgba(15,23,51,.72), rgba(15,23,51,.55));
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        overflow:hidden;
      }
      .card-inner{
        padding: clamp(22px, 4vw, 42px);
      }
      .headline{
        display:grid;
        grid-template-columns: 1.1fr .9fr;
        gap: 28px;
        align-items:center;
      }
      @media (max-width: 880px){
        .headline{grid-template-columns:1fr; gap:22px}
      }
      h2{
        font-size: clamp(28px, 4.2vw, 44px);
        line-height: 1.05;
        margin:0 0 12px 0;
        letter-spacing: -.6px;
      }
      p{
        margin:0 0 18px 0;
        color:var(--muted);
        line-height:1.55;
        font-size: 15.5px;
      }

      .meta{
        display:flex;
        flex-wrap:wrap;
        gap:10px;
        margin-top:10px;
      }
      .pill{
        display:inline-flex;
        align-items:center;
        gap:8px;
        padding:9px 12px;
        border-radius: 999px;
        border:1px solid rgba(34,48,90,.8);
        background: rgba(7,11,24,.35);
        color: var(--text);
        font-size: 13px;
      }
      .dot{
        width:9px;height:9px;border-radius:50%;
        background: linear-gradient(180deg, var(--accent), var(--accent2));
        box-shadow: 0 0 0 4px rgba(124,92,255,.14);
      }

      .timer{
        display:grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 12px;
      }
      @media (max-width: 520px){
        .timer{grid-template-columns: repeat(2, 1fr)}
      }
      .tile{
        border:1px solid rgba(34,48,90,.8);
        background: rgba(7,11,24,.35);
        border-radius: 16px;
        padding: 16px 14px;
        text-align:center;
      }
      .num{
        font-size: 28px;
        font-weight: 750;
        letter-spacing: .2px;
      }
      .lbl{
        margin-top:6px;
        color: var(--muted);
        font-size: 12px;
        letter-spacing: .18em;
        text-transform: uppercase;
      }

      .form{
        margin-top: 20px;
        display:flex;
        gap: 10px;
        flex-wrap: wrap;
        align-items:center;
      }
      .input{
        flex: 1 1 260px;
        min-width: 220px;
        padding: 12px 14px;
        border-radius: 14px;
        border: 1px solid rgba(34,48,90,.85);
        background: rgba(7,11,24,.35);
        color: var(--text);
        outline: none;
      }
      .input::placeholder{color: rgba(170,180,224,.75)}
      .btn{
        flex: 0 0 auto;
        padding: 12px 14px;
        border-radius: 14px;
        border: 1px solid rgba(124,92,255,.55);
        background: linear-gradient(135deg, rgba(124,92,255,.95), rgba(34,211,238,.65));
        color: #061018;
        font-weight: 750;
        letter-spacing: .2px;
        cursor: pointer;
      }
      .btn:focus-visible, .input:focus-visible{
        outline: 3px solid rgba(34,211,238,.22);
        outline-offset: 2px;
      }

      .footer{
        display:flex;
        justify-content:space-between;
        gap: 12px;
        flex-wrap: wrap;
        padding: 16px 22px;
        border-top: 1px solid rgba(34,48,90,.65);
        color: rgba(170,180,224,.8);
        font-size: 13px;
      }
      .link{
        color: rgba(170,180,224,.95);
        text-decoration: none;
        border-bottom: 1px dashed rgba(170,180,224,.45);
      }
      .link:hover{color: var(--text); border-bottom-color: rgba(233,237,255,.7)}
      .sr-only{
        position:absolute;
        width:1px;height:1px;
        padding:0;margin:-1px;
        overflow:hidden;clip:rect(0,0,0,0);
        white-space:nowrap;border:0;
      }
    </style>
  </head>
  <body>
    <main class="shell">
      <div class="brand" aria-label="Brand">
        <div class="logo" aria-hidden="true"></div>
        <h1>Kya ho raha h yaha </h1>
      </div>

      <section class="card" aria-label="Coming soon card">
        <div class="card-inner">
          <div class="headline">
            <div>
              <h2>Coming soon.</h2>
              <p>
                We’re polishing the experience and will be back shortly. Thanks for your patience.
              </p>
              <div class="meta">
                <span class="pill"><span class="dot" aria-hidden="true"></span><span id="launchText">Launching soon</span></span>
                <span class="pill">Support: <a class="link" href="mailto:support@example.com">support@example.com</a></span>
              </div>

              <form class="form" onsubmit="return false" aria-label="Notify me form">
                <label class="sr-only" for="email">Email address</label>
                <input class="input" id="email" type="email" autocomplete="email" placeholder="Get notified when we launch (demo only)" />
                <button class="btn" id="notifyBtn" type="submit">Notify me</button>
              </form>
              <p id="formNote" style="margin-top:10px;margin-bottom:0;font-size:13px;color:rgba(170,180,224,.85)">
                This form is a placeholder. Hook it to your backend when ready.
              </p>
            </div>

            <div aria-label="Countdown">
              <div class="timer" role="group" aria-label="Countdown timer">
                <div class="tile"><div class="num" id="d">--</div><div class="lbl">Days</div></div>
                <div class="tile"><div class="num" id="h">--</div><div class="lbl">Hours</div></div>
                <div class="tile"><div class="num" id="m">--</div><div class="lbl">Minutes</div></div>
                <div class="tile"><div class="num" id="s">--</div><div class="lbl">Seconds</div></div>
              </div>
            </div>
          </div>
        </div>

        <div class="footer">
          <div>© <span id="year"></span> Your Company</div>
          <div>
            <a class="link" href="/" aria-label="Home">Home</a>
          </div>
        </div>
      </section>
    </main>

    <script>
      // Set your launch date/time here (local time).
      // Example: new Date("2026-06-15T10:00:00")
      const LAUNCH_AT = new Date("2026-06-15T10:00:00");

      const pad2 = (n) => String(n).padStart(2, "0");
      const setText = (id, value) => { const el = document.getElementById(id); if (el) el.textContent = value; };

      function tick() {
        const now = new Date();
        let diff = LAUNCH_AT.getTime() - now.getTime();
        if (!Number.isFinite(diff)) diff = 0;
        if (diff < 0) diff = 0;

        const totalSeconds = Math.floor(diff / 1000);
        const days = Math.floor(totalSeconds / 86400);
        const hours = Math.floor((totalSeconds % 86400) / 3600);
        const minutes = Math.floor((totalSeconds % 3600) / 60);
        const seconds = totalSeconds % 60;

        setText("d", String(days));
        setText("h", pad2(hours));
        setText("m", pad2(minutes));
        setText("s", pad2(seconds));

        const launchText = document.getElementById("launchText");
        if (launchText) {
          if (diff === 0) launchText.textContent = "We’re live";
          else launchText.textContent = "Launching " + LAUNCH_AT.toLocaleString();
        }
      }

      document.getElementById("year").textContent = String(new Date().getFullYear());
      document.getElementById("notifyBtn").addEventListener("click", () => {
        const email = (document.getElementById("email").value || "").trim();
        const note = document.getElementById("formNote");
        if (!note) return;
        if (!email) note.textContent = "Enter an email address to continue (demo).";
        else note.textContent = "Thanks! (Demo) Captured: " + email;
      });

      tick();
      setInterval(tick, 1000);
    </script>
  </body>
</html>

