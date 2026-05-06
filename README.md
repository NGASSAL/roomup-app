# roomup-app

MVC PHP 8.4 / Apache · Multi-tenant MySQL

## Structure

```
roomup-app/
├── public/          ← Document root (index.php + .htaccess)
├── src/
│   ├── Core/        ← Router, Controller, Database
│   ├── Controllers/ ← HomeController, TenantController
│   └── Models/      ← TenantModel
├── views/           ← Templates PHP (layout + pages)
├── config/          ← Configuration app
├── storage/         ← Logs et cache (gitignored)
└── Dockerfile
```

## Lancement local

```bash
docker compose -f compose.local.yaml up -d
```

## Variables d'environnement

| Variable | Description |
|---|---|
| `APP_ENV` | `development` ou `production` |
| `DB_HOST` | Hôte MySQL (ex: `roomup-mysql`) |
| `DB_PORT` | Port MySQL (défaut: `3306`) |
| `DB_USER` | Utilisateur MySQL |
| `DB_PASS` | Mot de passe MySQL |

## Build Docker

```bash
docker build -t ghcr.io/roomup/app:develop .
docker push ghcr.io/roomup/app:develop
```
