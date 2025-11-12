# SuperPincode WordPress Setup Guide for Hostinger

## 📋 What You Have
Your WordPress site is already set up on Hostinger with domain: **superpincode.in**

## 📦 Files to Upload
You have 3 files in the `wordpress-files` folder:
1. `page-superpincode.php` - WordPress page template
2. `logo.svg` - SuperPincode logo
3. `PincodeData.json` - Database file (76 MB)

---

## 🚀 Step-by-Step Installation

### **Step 1: Access Your WordPress Theme Folder via FTP/File Manager**

#### Option A: Using Hostinger File Manager (Easiest)
1. Login to your **Hostinger control panel** (hpanel.hostinger.com)
2. Go to **Files** → **File Manager**
3. Navigate to: `public_html/wp-content/themes/`
4. Find your **active theme folder** (e.g., `twentytwentyfour`, `astra`, etc.)
   - You can check your active theme by going to: WordPress Admin → Appearance → Themes

#### Option B: Using FTP (FileZilla, etc.)
1. Get your FTP credentials from Hostinger
2. Connect to your site via FTP
3. Navigate to: `/public_html/wp-content/themes/your-theme-name/`

---

### **Step 2: Create Assets Folder**
1. Inside your theme folder, create a new folder called: **`superpincode-assets`**
2. Your path should look like:
   ```
   /public_html/wp-content/themes/your-theme-name/superpincode-assets/
   ```

---

### **Step 3: Upload Files**

#### Upload to Theme Root:
Upload this file to: `/public_html/wp-content/themes/your-theme-name/`
- ✅ `page-superpincode.php`

#### Upload to superpincode-assets folder:
Upload these files to: `/public_html/wp-content/themes/your-theme-name/superpincode-assets/`
- ✅ `logo.svg`
- ✅ `PincodeData.json`

**Final Structure:**
```
your-theme-name/
├── page-superpincode.php
├── superpincode-assets/
│   ├── logo.svg
│   ├── PincodeData.json
├── (other theme files...)
```

---

### **Step 4: Create a New Page in WordPress**

1. **Login to WordPress Admin**
   - Go to: `https://superpincode.in/wp-admin`
   - Enter your admin username and password

2. **Create New Page**
   - Click **Pages** → **Add New**
   - Enter Page Title: **"Home"** or **"Search"** (whatever you prefer)

3. **Assign Template**
   - On the right sidebar, find **"Page Attributes"** or **"Template"** section
   - From the **Template** dropdown, select: **"SuperPincode Search"**

4. **Publish**
   - Click **"Publish"** button (blue button on top right)

5. **View Page**
   - Click "View Page" to see your SuperPincode search page live!

---

### **Step 5: Set as Homepage (Optional)**

If you want SuperPincode to be your homepage:

1. Go to **Settings** → **Reading**
2. Under **"Your homepage displays"**, select **"A static page"**
3. Choose your newly created SuperPincode page as **Homepage**
4. Click **Save Changes**

Now `https://superpincode.in` will show your SuperPincode search page!

---

## 🎨 Alternative Method: Using Child Theme (Recommended for Advanced Users)

If you're using a popular theme and want to prevent losing changes during theme updates:

### Create a Child Theme:

1. **Create child theme folder:**
   - Path: `/public_html/wp-content/themes/your-theme-child/`

2. **Create `style.css`:**
```css
/*
Theme Name: Your Theme Child
Template: your-parent-theme-name
*/
```

3. **Create `functions.php`:**
```php
<?php
function child_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');
?>
```

4. **Upload files to child theme:**
   - `page-superpincode.php` → in child theme root
   - `superpincode-assets/` → in child theme folder

5. **Activate child theme** in WordPress Admin → Appearance → Themes

---

## 🔧 Troubleshooting

### Issue 1: Template Not Showing in Dropdown
- **Solution:** Make sure `page-superpincode.php` is uploaded to the **active theme** folder
- Check file permissions: Should be `644` or `755`
- Refresh WordPress admin page (Ctrl + F5)

### Issue 2: Logo/Database Not Loading
- **Solution:** Verify files are in `/superpincode-assets/` folder
- Check file paths in page template match your setup
- Test by visiting: `https://superpincode.in/wp-content/themes/your-theme/superpincode-assets/logo.svg`

### Issue 3: "Search from DB" Not Working
- **Solution:** Database file is 76 MB, might take time to load first time
- Check if `PincodeData.json` uploaded completely (file size should be ~76 MB)
- Check browser console (F12) for any errors

### Issue 4: Styling Issues
- **Solution:** Your theme might override some styles
- Add `!important` to CSS if needed
- Or use a blank template theme

---

## 📱 Additional Enhancements (Optional)

### Add Bootstrap Icons CDN to Your Theme:

If Bootstrap icons are not showing, add this to your theme's `functions.php`:

```php
function superpincode_enqueue_assets() {
    // Bootstrap Icons
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css');
}
add_action('wp_enqueue_scripts', 'superpincode_enqueue_assets');
```

---

## ✅ Verification Checklist

- [ ] Files uploaded to correct locations
- [ ] Theme template appears in page dropdown
- [ ] New page created with SuperPincode template
- [ ] Page published and accessible
- [ ] Search by Pincode works
- [ ] Search by Location works
- [ ] Search from DB works
- [ ] Logo displays correctly
- [ ] Responsive design works on mobile

---

## 🎯 Quick Summary

1. **Upload** `page-superpincode.php` to theme folder
2. **Create** `superpincode-assets` folder in theme
3. **Upload** `logo.svg` and `PincodeData.json` to assets folder
4. **Create** new page in WordPress
5. **Select** "SuperPincode Search" template
6. **Publish** and enjoy!

---

## 🆘 Need Help?

If you encounter any issues:
1. Check file paths and permissions
2. Verify theme is active
3. Clear WordPress cache (if using cache plugin)
4. Check browser console for JavaScript errors (F12)

---

**Your SuperPincode page will be live at:**
`https://superpincode.in/your-page-slug/`

Or set as homepage:
`https://superpincode.in/`

---

## 🌐 Going Live

Once everything is working:
- Test all three search methods
- Test on different devices (mobile, tablet, desktop)
- Check page load speed
- Consider using a caching plugin for better performance
- Add page to WordPress menu for easy navigation

**Congratulations! Your SuperPincode website is now live on WordPress! 🎉**
