# zyt-me
SortLink Generator

##Lumen

#####For service provider register
```
$app->register(\ZytMe\ZytMeServiceProvider::class);
```

#####For config/zytme.php


```
        "zytme_public_key" => env("ZYTME_PUBLIC_KEY",""),
        "zytme_private_key" => env("ZYTME_PRIVATE_KEY","")
        
```

This package was built using [zyt.me](https://zyt.me).


##Using Example
```
ZytMeServiceFacade::shorten('YOUR_LINK'));
```
