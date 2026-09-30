<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks for Today</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <style {csp-style-nonce}>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: #f5f6f8;
            color: #222;
            font-family: Arial, sans-serif;
            line-height: 1.5;
        }

        header { background: #fff; border-bottom: 1px solid #ddd; }

        nav, main, footer {
            width: min(100% - 32px, 960px);
            margin: 0 auto;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 64px;
        }

        .brand {
            color: #222;
            font-size: 1.2rem;
            font-weight: 700;
            text-decoration: none;
        }

        nav a:not(.brand) { color: #555; margin-left: 16px; text-decoration: none; }
        nav a:hover, nav a:focus { color: #1769aa; }

        main { padding: 56px 0; }

        .intro, .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 24px;
        }

        .intro { margin-bottom: 20px; }
        h1, h2 { margin-top: 0; }
        h1 { font-size: 2rem; margin-bottom: 8px; }
        h2 { font-size: 1.25rem; }
        p { color: #555; margin-bottom: 0; }
        code { background: #f0f1f3; border-radius: 3px; padding: 2px 4px; }

        footer {
            border-top: 1px solid #ddd;
            color: #666;
            font-size: .9rem;
            padding: 20px 0;
        }

        @media (max-width: 600px) {
            nav {
                align-items: flex-start;
                flex-direction: column;
                gap: 8px;
                padding: 16px 0;
            }

            nav a:not(.brand) { margin-left: 0; margin-right: 16px; }
            main { padding: 32px 0; }
        }
    </style>
</head>
<body>
    <header>
        <nav aria-label="Main navigation">
            <a class="brand" href="<?= base_url('/') ?>">Tasks for Today</a>
            <div>
                <a href="<?= base_url('/') ?>">Home</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="intro">
            <h1>Tasks for Today</h1>
            <p>A simple place to view and manage daily tasks.</p>
        </section>

        <section class="card">
            <h2>Welcome</h2>
            <p>Your CodeIgniter application is ready. You can continue building the task pages from this starting point.</p>
        </section>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> Tasks for Today</p>
    </footer>
</body>
</html>
