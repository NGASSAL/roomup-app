<div style="margin-top:32px">
    <h2 style="font-size:1.5rem;margin-bottom:24px">Liste des Tenants</h2>

    <?php if (!empty($error)): ?>
        <div style="background:#fef2f2;border:1px solid #fca5a5;border-radius:8px;padding:16px;color:#dc2626;margin-bottom:24px">
            ⚠️ Erreur BDD : <?= htmlspecialchars($error) ?>
        </div>
    <?php endif; ?>

    <?php if (empty($tenants)): ?>
        <div style="background:white;border-radius:12px;padding:32px;text-align:center;color:#6b7280">
            Aucun tenant trouvé — vérifie la connexion MySQL
        </div>
    <?php else: ?>
        <table style="width:100%;background:white;border-radius:12px;overflow:hidden;box-shadow:0 1px 4px rgba(0,0,0,.08);border-collapse:collapse">
            <thead>
                <tr style="background:#f8fafc;font-size:0.85rem;color:#6b7280;text-transform:uppercase">
                    <th style="padding:12px 16px;text-align:left">ID</th>
                    <th style="padding:12px 16px;text-align:left">Nom</th>
                    <th style="padding:12px 16px;text-align:left">Domaine</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tenants as $t): ?>
                <tr style="border-top:1px solid #f1f5f9">
                    <td style="padding:12px 16px;color:#6b7280"><?= (int)$t['tenant_id'] ?></td>
                    <td style="padding:12px 16px;font-weight:500"><?= htmlspecialchars($t['name']) ?></td>
                    <td style="padding:12px 16px;color:#4f46e5"><?= htmlspecialchars($t['domain']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
