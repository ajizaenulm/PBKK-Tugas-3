## Local Setup

```
git clone https://github.com/ajizaenulm/PBKK-Tugas-3.git
cd PBKK-Tugas-3
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
composer run dev
```

## Routes list

- `/` home page
- `/?mode={dark | light}` change to dark / light theme
- `/beranda` home page
- `/beranda?user={name}` home page with greeting notification
- `/ide-agent` agent idea page
- `/profil-mahasiswa` student detail page
- `POST /agent/idea` send agent idea