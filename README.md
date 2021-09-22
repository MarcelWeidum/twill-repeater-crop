## Setup

Setup .env
`cp .env.example .env`

Make database.sqlite
`touch database/database.sqlite`

Migrate database
`php artisan migrate`

Make superadmin
`php artisan twill:superadmin`

Go to `/admin`
