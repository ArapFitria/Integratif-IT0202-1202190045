TUGAS INSTALL LARAVEL

1. Install xampp

   ![1](https://user-images.githubusercontent.com/92453574/180661042-c2f789c7-9c4d-4312-9df7-bd23d8853f76.png)
   

2. Install Composer

   ![2](https://user-images.githubusercontent.com/92453574/180661043-87fca73f-064e-42ba-8f8d-54511d8e2654.png)

   

3. Go to CMD (windows+r)

4. Go to xampp folder 

   ```
   cd \xampp\htdocs
   ```

   

5. Install laravel 

   ```
   composer create-project --prefer-dist laravel/laravel fitria
   ```

   

6. check in folder

   ![3](https://user-images.githubusercontent.com/92453574/180661046-750ec214-63fa-488d-b26c-f782466f64a9.png)

   

7. open `cd fitria` then type `php artisan serve` to know the address of laravel in web 

  ![4](https://user-images.githubusercontent.com/92453574/180661038-9b4a98c4-e0a5-467f-a527-fac4408886be.png)

   

8. last, open a web browser with the link address provided

   ![5](https://user-images.githubusercontent.com/92453574/180661041-29eda81a-71dc-4029-89c1-517216a5c9f1.png)

   and done!

   
---
DATABASE AND RSS
---

1. Change DB_DATABASE according your database name

![Screenshot (647)](https://user-images.githubusercontent.com/92453574/180661930-57e09880-d7e8-40db-a9af-8bfe2755d864.png)

2. create rss and news table
```
php artisan make:migration create_rss_table
php artisan make:migration create_news_table
```

3. create seeder and controller
```
php artisan make:model Rss -seed --controller
```

4. create news controller
```
php artisan make:model News --controller
```

5. edit NewsController.php

![2](https://user-images.githubusercontent.com/92453574/180661933-7820eba8-e37b-4c03-bb81-874f718dfd56.PNG)

6. edit route 

![3](https://user-images.githubusercontent.com/92453574/180661934-92410263-ddc5-48d9-9c00-b104d72c3178.PNG)

7. run
```
php artisan migrate:fresh
php artisan db:seed
php artisan serve
```
8. check your database

![4](https://user-images.githubusercontent.com/92453574/180661935-8149f4e0-3410-4cd7-8dae-3f934daf26e4.PNG)

9. check your browser

![5](https://user-images.githubusercontent.com/92453574/180661936-06bb8556-a25d-4620-80f5-686bddb17c9a.PNG)

---
HOMEPAGE
---
![a](https://user-images.githubusercontent.com/92453574/180662169-32467d78-f07f-4cc0-bf8e-aa702a87279a.PNG)

---
UAS
---
1. homepage

![b](https://user-images.githubusercontent.com/92453574/180662398-5dc5a633-dde7-4ff0-9a9e-56b80438bbcf.PNG)

2. pokemon API

![c](https://user-images.githubusercontent.com/92453574/180662401-bd3897b2-a291-4d2f-beb9-1de6e03ca938.PNG)

3. rss teman

![d](https://user-images.githubusercontent.com/92453574/180662402-9a9c9f6e-06aa-42b7-a66c-2d65009b6f39.PNG)


