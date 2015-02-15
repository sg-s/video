#video

This is a PHP wrapper around [youtube-dl](http://rg3.github.io/youtube-dl/). This allows you to enter a URL into a form on a server, which will download that video for you.

This is what it looks like:

![](images/hero.png)

#Installation

* You need a computer running Apache and PHP. The best way to do this is to install [MAMP](http://www.mamp.info/en/) (or equivalent)
* Fire up MAMP and start the servers: ![](images/1.png)
*  Figure out the folder that MAMP will serve as a website ![](images/2.png)
*  Now, copy these files there:

``` 
git clone https://github.com/sg-s/video
```

and hack away. 

#Troubleshooting

If you see an error saying about permissions being denied, you have to 

```
chmod 777 uploads
```

# Known Issues

using 

```
youtube-dl -x -k 
```

doesn't work because paths aren't set correctly, and PHP doesn't know where `ffprobe` is. 
