# 📘 Contao Subline Bundle

The **Contao Subline Bundle** extends Contao's native *Headline* content
element by adding a **Subline** field.\
The subline can be optionally displayed **above or below** the
headline.\
Insert Tags and custom styling are fully supported.

------------------------------------------------------------------------

## ✨ Features

-   Adds a **Subline** field to the "Headline" content element\
-   Display subline **above or below** the headline\
-   Insert Tags supported\
-   Clean CSS class naming\
-   Compatible with **Contao 5.3+**\
-   Available in English and German

------------------------------------------------------------------------

## 📦 Installation

### **1. Install the bundle**

#### Via Contao Manager (recommended)

1.  Open **Contao Manager**\

2.  Search for:

        solidwork/contao-subline-bundle

3.  Install the package\

4.  Click **Apply changes**

#### Via Composer

``` bash
composer require solidwork/contao-subline-bundle
```

------------------------------------------------------------------------

## 🔧 2. Update the installation

After installing the bundle, you must:

### Clear the Contao cache

``` bash
vendor/bin/contao-console cache:clear
```

### Run the database migration

``` bash
vendor/bin/contao-console contao:migrate
```

These steps create the new database field used for the subline.

------------------------------------------------------------------------

## 🧩 Usage

1.  Create or edit a **Headline** content element\
2.  Enter text into the **Subline** field\
3.  Select the **Subline Position**:
    -   **Above** the headline (default)\
    -   **Below** the headline\
4.  Save the element --- Contao handles the output automatically

------------------------------------------------------------------------

## 📄 License

Licensed under the **LGPL-3.0** license.

------------------------------------------------------------------------

## 🤝 Contributing

Feedback, bug reports or pull requests are welcome.
