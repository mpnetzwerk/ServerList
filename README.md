# ServerList
A list of Minecraft: Pocket Edition servers

## How to add a server

First, create a folder for your server's domain in the `servers`-folder. Folder names are always the reversed domain seperated by dots and then the port.

For example, if you want to add the server on domain `example.net` and port `19132`, create the following folder schema:

```
servers (already exists)
    net
        example
            19132
```

Then, create the files `name.txt` and `description.txt` in your subfolder. Put the name of your server into `name.txt` and a description into `description.txt`.

To make it easier to understand, we've created this example in the `example`-folder.

## Report outdated servers

If a server doesn't exist anymore or is only available on a very old version for a long time, feel free to open an issue. We'll check it and remove the server from the list if it's correct.

## License & Credits
[![Creative Commons License](https://i.creativecommons.org/l/by-sa/4.0/88x31.png)](http://creativecommons.org/licenses/by-sa/4.0/)

[ServerList](https://github.com/mpnetzwerk/ServerList) by [MP - Netzwerk | MPN](https://github.com/mpnetzwerk) is licensed under a [Creative Commons Attribution-ShareAlike 4.0 International License](http://creativecommons.org/licenses/by-sa/4.0/). Permissions beyond the scope of this license may be available on request.