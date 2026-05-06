<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'roomup.app') ?></title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; background: #f0f4ff; color: #1a1a2e; }
        header { background: #1a1a2e; color: white; padding: 16px 32px; display: flex; align-items: center; gap: 12px; }
        header h1 { font-size: 1.4rem; }
        header span { background: #4f46e5; padding: 2px 10px; border-radius: 20px; font-size: 0.75rem; }
        nav { background: #2d2d5e; padding: 10px 32px; display: flex; gap: 24px; }
        nav a { color: #a5b4fc; text-decoration: none; font-size: 0.9rem; }
        nav a:hover { color: white; }
        main { max-width: 960px; margin: 40px auto; padding: 0 24px; }
        footer { text-align: center; padding: 32px; color: #6b7280; font-size: 0.8rem; margin-top: 60px; }
    </style>
</head>
<body>
    <header>
        <h1>🏠 roomup<strong>.app</strong></h1>
        <span><?= htmlspecialchars(getenv('APP_ENV') ?: 'dev') ?></span>
    </header>
    <nav>
        <a href="/">Accueil</a>
        <a href="/tenants">Tenants</a>
        <a href="/health">Health</a>
    </nav>
    <main>
        <?= $content ?>
    </main>
    <footer>roomup.app — MVC PHP 8.4 · Multi-tenant MySQL</footer>
</body>
</html>
