# Deployment to Your Server

## Upload These Files to Your Server

Upload to: `https://rotatool.dbzocchi.app/`

### Required Files:
1. **index.html** - The main app
2. **api.php** - The backend API (simple PHP file)

### File Structure on Server:
```
rotatool.dbzocchi.app/
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
Visit: `https://rotatool.dbzocchi.app/`

You should see:
- ✓ The rota manager loads
- ✓ Bottom-right notification: "Saved to server ✓"
- ✓ Changes persist when you refresh

## Share With Managers

Just give them:
```
https://rotatool.dbzocchi.app/
```

Everyone who visits this URL:
- ✅ Sees the same rota
- ✅ Can make changes
- ✅ Changes sync for everyone instantly

## How It Works

1. **index.html** - The app (runs in browser)
2. **api.php** - Saves/loads data from `rota-data.json`
3. **rota-data.json** - Stores all the rota data (auto-created)

## Usage Tips

**⚠️ IMPORTANT: Remove Staff Mode**
- When you're done removing staff, **untoggle the "Remove Staff" button** in the hamburger menu
- If left enabled, clicking staff will delete them instead of opening their settings
- The button should NOT be highlighted when you're done removing people

**Other Tips:**
- Click staff cards to edit settings (unavailable days, excluded roles, etc.)
- Drag staff from left panel to schedule grid on right
- Use hamburger menu for Save/Load/Download features
- Download creates a high-quality image with summary

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
- SSL/HTTPS (already done: ✓ https://rotatool.dbzocchi.app)
- Authentication (if needed)
- Access control

The app itself is single-user (everyone shares the same data).
