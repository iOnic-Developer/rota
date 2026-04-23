# Deployment to Your Server

## Upload These Files to Your Server

Upload to: `https://rota.dbzocchi.app/`

### Required Files:
1. **index.html** - The main app
2. **api.php** - The backend API (simple PHP file)

### File Structure on Server:
```
rota.dbzocchi.app/
├── index.html
├── api.php
└── rota-data.json (auto-created)
```

## Setup Steps

### 1. Upload Files
- Upload `index.html` to your server
- Upload `api.php` to your server
- Make sure PHP is enabled (most servers have it)

### 2. Set Permissions (if needed)
```bash
chmod 644 index.html api.php
chmod 666 rota-data.json  # If file exists
chmod 755 .  # Make directory writable for rota-data.json creation
```

### 3. Test
Visit: `https://rota.dbzocchi.app/`

You should see:
- ✓ The rota manager loads
- ✓ Bottom-right notification: "Saved to server ✓"
- ✓ Changes persist when you refresh

## Share With Managers

Just give them:
```
https://rota.dbzocchi.app/
```

Everyone who visits this URL:
- ✅ Sees the same rota
- ✅ Can make changes
- ✅ Changes sync for everyone instantly

## How It Works

1. **index.html** - The app (runs in browser)
2. **api.php** - Saves/loads data from `rota-data.json`
3. **rota-data.json** - Stores all the rota data (auto-created)

## Troubleshooting

**"Saved locally only" message**
- Check that `api.php` uploaded correctly
- Check PHP is enabled on your server
- Check directory permissions allow file creation

**Changes don't persist**
- Check browser console (F12) for errors
- Make sure `rota-data.json` can be created/written
- Try creating empty `rota-data.json` with write permissions

**No backend needed!**
- Just 1 simple PHP file
- No database required
- No npm/Node.js needed
- Works on any PHP server

## Security

Your reverse proxy should handle:
- SSL/HTTPS (already done: ✓ https://rota.dbzocchi.app)
- Authentication (if needed)
- Access control

The app itself is single-user (everyone shares the same data).
