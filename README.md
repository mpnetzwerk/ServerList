<h1 align="center">ServerList</h1>
<p align="center">A list of Minecraft: Bedrock Edition servers</p>

<br>

<p align="center">
    <a href="https://circleci.com/gh/mpnetzwerk/ServerList">
    <img src="https://img.shields.io/circleci/project/github/mpnetzwerk/ServerList.svg" alt="CircleCI">
    </a>
    <a href="https://github.com/mpnetzwerk/ServerList/blob/master/LICENSE">
        <img src="https://img.shields.io/github/license/mpnetzwerk/ServerList.svg" alt="License">
    </a>
    <a href="https://gitter.im/mpnetzwerk/ServerList">
        <img src="https://img.shields.io/gitter/room/mpnetzwerk/ServerList.svg" alt="Gitter">
    </a>
</p>

##

[• Description](#-description)  
[• Add a Server](#-add-a-server)  
[• Report outdated Servers](#-report-outdated-servers)  
[• Use the Data](#-use-the-data)  
[• Contribution](#-contribution)  
[• License](#%EF%B8%8F-license)

## 📙 Description
This is an advanced and expandable server list for Minecraft: Bedrock Edition servers. You can add your server with a pull request and fetch all servers including their name, description, IP and port in JSON format.

## 📌 Add a Server
First, create a folder for your server's domain in the `servers`-folder. Folder names are always the reversed domain seperated by dots and then the port.

For example, if you want to add the server on domain `example.net` and port `19132`, create the following folder schema:

```
servers (already exists)
    net
        example
            19132
```

Then, create the files `name.txt` and `description.txt` in your subfolder. Put the name of your server into `name.txt` and a description into `description.txt`. Both files may only have one line.

To make it easier to understand, we've created this example in the `example`-folder.

## 🗑 Report outdated Servers
If a server doesn't exist anymore or is only available on a very old version for a long time, feel free to open an issue. We'll check it and remove the server from the list if it's correct.

## 🏗 Use the Data
Our script generates always generates a JSON-file containing all servers including their IP address, port, name and description. You can get it with the [CircleCI-artifacts](https://circleci.com/gh/mpnetzwerk/ServerList) of each build, preferably via the CircleCI-API.

The JSON-file is built like this:

```json
[
    {
        name: "First Test Server",
        description: "A great server",
        ip: "play.testone.com",
        port: 19132
    },
    {
        name: "Second Test Server",
        description: "Another great server"
        ip: "play.testtwo.com",
        port: 19133
    },
    ...
]
```

## 🙋‍ Contribution
Contributions are always very welcome! It's completly equally if you're a beginner or a more experienced developer.

Please read our **[Contribution Guidelines](CONTRIBUTING.md)** before creating an issue or submitting a pull request.

Thanks for your intrest 🎉👍!

## 👨‍⚖️ License
[![Creative Commons License](https://i.creativecommons.org/l/by-sa/4.0/88x31.png)](http://creativecommons.org/licenses/by-sa/4.0/)

[ServerList](https://github.com/mpnetzwerk/ServerList) by [MP - Netzwerk | MPN](https://github.com/mpnetzwerk) is licensed under a [Creative Commons Attribution-ShareAlike 4.0 International License](http://creativecommons.org/licenses/by-sa/4.0/). Permissions beyond the scope of this license may be available on request.
