# [:house: Feni Batch Home Page](http://poloey.github.io/feni)

# Class 24 

Today we have learned more about pdo. Earlier we used only `query` function. Today we have used `prepare`, `execute` and `bindParam` function. So same query we can write in following 3 ways.   

## Notice
Tomorrow class is ON. So please come one time. Imran Tofael Israt you people will come  early and start crud. 

### simple query
~~~php
$connection = new PDO($dsn, $user, $password);

$name = 'sarwar';
$email = 'sarwar@gmai.com';
$sql = "INSERT INTO people (name, email) VALUES ('$name', '$email')";
$connection->query($sql);
~~~

### using `prepare` and `execute` 
~~~php
$connection = new PDO($dsn, $user, $password);
$name = 'sarwar';
$email = 'sarwar@gmai.com';
$sql = "INSERT INTO people (name, email) VALUES (:name, :email)";
$statement = $connection->prepare($sql);
$statement->execute(
  ':name' => $name,
  ':email' => $email
);
~~~

### using `prepare` and `execute`  and `bindParam`
~~~php
$connection = new PDO($dsn, $user, $password);
$name = 'sarwar';
$email = 'sarwar@gmai.com';
$sql = "INSERT INTO people (name, email) VALUES (:name, :email)";
$statement = $connection->prepare($sql);
$statement->bindParam(":name", $name);
$statement->bindParam(":email", $email);
$statement->execute();
~~~

So, In my case I try to stick with middle one. since I can pass a array containing all placeholders

### validations
We have 2 type of validations for inserting data into database. Server side validations and Client side validations. In client side validation we can use html basic `required` attribute. In server side we will use lot of helper function, regular expression. `trim`, `empty`,  `isset`, `is_null` functions.








