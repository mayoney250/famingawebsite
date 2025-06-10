# 🧹 Plugin Cleanup Checklist

## 🎯 **Goal:** Remove 6 inactive plugins to eliminate security warnings

### 📋 **Step-by-Step Instructions:**

1. **Go to WordPress Admin:**
   - Navigate to: `Your WordPress Site → Admin Dashboard`
   - Click: `Plugins → Installed Plugins`

2. **Language Plugin Cleanup (Keep Only One):**
   
   **KEEP ONE OF THESE** (choose the one that works best):
   - ✅ `faminga-super-fix` (recommended - sounds most comprehensive)
   - OR `faminga-language-switcher-fix-v2` (if super-fix doesn't work)
   
   **DELETE ALL OTHERS:**
   - ❌ faminga-career-translation-plugin  
   - ❌ faminga-direct-language-fix
   - ❌ faminga-inline-fix
   - ❌ faminga-language-switcher-fix (old version)
   - ❌ lang-fix

3. **Standard Plugin Cleanup:**
   - ❌ Delete: `Hello Dolly` (default WordPress plugin - not needed)
   - ✅ Keep: `Akismet Anti-spam` (security)
   - ✅ Keep: `UpdraftPlus` (backup)

4. **Update Pending Plugins:**
   - Click "Update" on any plugins showing update notifications

### 🎯 **Expected Result:**
- **Before:** 6 inactive plugins + 1 update needed
- **After:** All plugins active and updated
- **Site Health:** Plugin warnings disappear!

### ⚠️ **Important:**
- Test your language switching functionality after cleanup
- If something breaks, activate one of the other language plugins
- Keep your main translation system in `wp-content/themes/faminga-theme-v1/inc/translations.php`

## 🏆 **Final Result Prediction:**
After this cleanup: **0 Critical + 3-4 Recommended issues** (all normal for local XAMPP development) 