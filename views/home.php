<div style="margin-top:32px">
    <h2 style="font-size:1.8rem;margin-bottom:8px">Bienvenue sur roomup<strong>.app</strong></h2>
    <p style="color:#6b7280;margin-bottom:32px">Plateforme de gestion multi-tenant</p>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px">
        <div style="background:white;border-radius:12px;padding:24px;box-shadow:0 1px 4px rgba(0,0,0,.08)">
            <div style="font-size:2rem">🌍</div>
            <div style="font-weight:600;margin:8px 0 4px">Environnement</div>
            <div style="color:#4f46e5;font-weight:700"><?= htmlspecialchars($appEnv) ?></div>
        </div>
        <div style="background:white;border-radius:12px;padding:24px;box-shadow:0 1px 4px rgba(0,0,0,.08)">
            <div style="font-size:2rem">🗄️</div>
            <div style="font-weight:600;margin:8px 0 4px">Base de données</div>
            <div style="color:#4f46e5;font-weight:700"><?= htmlspecialchars($dbHost) ?></div>
        </div>
        <div style="background:white;border-radius:12px;padding:24px;box-shadow:0 1px 4px rgba(0,0,0,.08)">
            <div style="font-size:2rem">✅</div>
            <div style="font-weight:600;margin:8px 0 4px">Statut</div>
            <div style="color:#16a34a;font-weight:700">Opérationnel</div>
        </div>
    </div>
</div>
