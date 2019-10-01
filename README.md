# How to use

# 1 - Create the project
``` 
composer create-project guil95/api-sample --prefer-source <folder>
```

# 2 - Install dependencies
```
composer install
```

# 3 - Stand up container

```
cd docker && docker-compose up
```

# 4 - Update hosts to url

```
sudo nano /etc/hosts add 127.0.0.1 apisample.local 
```

# 5 - Execute migrate and seeds

```
  composer migrate && composer seed
```
