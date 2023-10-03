# KJ-pishing-form-registrasi

Cara menjalankan : 
1. Cloning project ini
2. Buka melalui IDE ex : VScode
3. Copy file ```.env example``` menjadi file ```.env```
4. Nyalakan database server lalu buat database baru ex : KJ-pishing-resgister
5. Sambungkan database ke file ```.env```
6. Buka terminal ketikkan command ```composer install```
7. Lalu ketikkan ```php artisan key:generate``` 
8. Lalu ketikkan ```php artisan migrate``` untuk migrasi database
9. Lalu ketikkan ```php artisan serve``` untuk menjalankan server
10. Buka route ```http://127.0.0.1:8000/registrasi``` untuk testing  
