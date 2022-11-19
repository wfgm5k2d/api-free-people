# api-free-people

<h2> Описание </h2>
<p>
  Реализация методов delete, put, create непредусмотрена. Для добавления в базу данных машин и пользователей испольуете seed.
</p>
<h2>Установка</h2>

<pre>переименовать .env.example в .env</pre>
<pre>composer install</pre>
<pre>php artisan migrate - предложить создать БД (согласиться)</pre>
<pre>php artisan db:seed --class=UserSeeder</pre>
<pre>php artisan db:seed --class=CarsSeeder</pre>

<h2>Использование</h2>

### Можно делать запросы через Postman

<p>Получение всех пользователей</p>
<pre>http://127.0.0.1:8000/api/user</pre>

<p>Получение пользователей по ID</p>
<pre>http://127.0.0.1:8000/api/user/{id}</pre>

<p>Получение машин привязанных к пользователю</p>
<pre>http://127.0.0.1:8000/api/user/{id}/car/set/{carId}</pre>

<p>Получение всех машин</p>
<pre>http://127.0.0.1:8000/api/cars</pre>

<p>Получение машины по ID</p>
<pre>http://127.0.0.1:8000/api/cars/{id}</pre>

<p>Получение пользователя машины</p>
<pre>http://127.0.0.1:8000/api/cars/user/get/{userId}</pre>
