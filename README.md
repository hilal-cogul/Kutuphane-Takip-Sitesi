# 📚 CNS Library – Web Tabanlı Kütüphane Yönetim Sistemi

CNS Library, kütüphane envanterini ve üye bilgilerini dijital ortamda yönetmek amacıyla geliştirilmiş, **PHP ve MySQL tabanlı** bir web uygulamasıdır.
Sistem, yönetici odaklı bir panel yapısı sunarak kitap/ürün ve üye verilerinin kolayca kontrol edilmesini sağlar.

---

## 🚀 Özellikler

* **Dinamik Envanter Yönetimi**

  * Kitap/ürün ekleme, listeleme, güncelleme ve silme (CRUD)
  * Ürün adı, numarası, stok, fiyat ve tür bilgileri

* **Üye Takip Sistemi**

  * Üyelik kayıt tarihi görüntüleme
  * Üye aktiflik durumu yönetimi

* **Gerçek Zamanlı Veri Görüntüleme**

  * Veritabanındaki değişikliklerin anlık olarak tablolar üzerinde gösterilmesi

* **Gelişmiş Form Tasarımları**

  * Kullanıcı dostu ve görsel olarak zengin formlar

* **Modüler CSS Yapısı**

  * Sayfa bazlı ayrılmış, okunabilir ve sürdürülebilir stil dosyaları

---

## 🛠 Kullanılan Teknolojiler

* **Frontend:** HTML5, CSS3
* **Backend:** PHP (Procedural)
* **Veritabanı:** MySQL
* **Sunucu:** Apache (XAMPP / WAMP)

---

## 🗄 Veritabanı Yapısı

**Veritabanı Adı:** `hilalcog_urun`

### 📌 urunlerimiz Tablosu

| Sütun | Açıklama         |
| ----- | ---------------- |
| ad    | Ürün / Kitap adı |
| no    | Ürün numarası    |
| stok  | Stok bilgisi     |
| fiyat | Ürün fiyatı      |
| tur   | Ürün türü        |

### 📌 uyeler Tablosu

| Sütun          | Açıklama               |
| -------------- | ---------------------- |
| kullaniciadi   | Üye kullanıcı adı      |
| uyeliktarihi   | Üyelik tarihi          |
| aktiflikdurumu | Üyenin aktiflik durumu |

---

## ⚙ Kurulum

1. **Projeyi İndirin**

   ```bash
   git clone https://github.com/kullanici-adi/cns-library.git
   ```

2. **Sunucuya Taşıyın**
   Dosyaları `htdocs` (XAMPP) veya `www` (WAMP) klasörüne kopyalayın.

3. **Veritabanını Oluşturun**

   ```sql
   CREATE DATABASE hilalcog_urun;
   ```

4. **Veritabanı Bağlantısını Güncelleyin**

   `urunlerimiz.php` ve `uyeler.php` dosyalarında:

   ```php
   $baglanti = mysqli_connect("localhost", "KULLANICI_ADI", "SIFRE", "hilalcog_urun");
   ```

5. **Tabloları Oluşturun**
   Kodda belirtilen sütun yapılarına uygun şekilde tabloları ekleyin.

---

## 📁 Proje Dosya Yapısı

```
CNS-Library/
│
├── index.php
├── urunlerimiz.php
├── uyeler.php
│
├── giris.html
├── iletisim.html
│
├── style.css
├── style1.css
├── style2.css
│
└── README.md
```

---

## 🔐 Güvenlik Notları

* Form verileri **POST** metodu ile gönderilmelidir
* SQL Injection’a karşı **Prepared Statements** kullanılması önerilir
* Giriş işlemleri için oturum (session) yapısı eklenebilir

---

## 📝 Geliştirici Notu

Bu proje, **PHP & MySQL ile veritabanı yönetimi**, **CRUD işlemleri** ve **dinamik web uygulaması geliştirme** konularında temel bir yapı sunmak amacıyla geliştirilmiştir.
Akademik projeler, portföy çalışmaları ve küçük ölçekli sistemler için uygundur.

