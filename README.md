
<div align="center">
    <img src="https://cdn.learnku.com/uploads/images/202009/27/38389/WFQxJ7qZ1k.png!large" height="80"> 
</div>
<br>

<p align="center">
    <a href="https://github.com/jqhph/dcat-admin/actions">
        <img src="https://github.com/jqhph/dcat-admin/workflows/Laravel%20Dusk/badge.svg" alt="Build Status">
    </a>
    <a href="https://styleci.io/repos/182349597">
        <img src="https://github.styleci.io/repos/182349597/shield" alt="StyleCI">
    </a>
    <a href="https://packagist.org/packages/dcat/laravel-admin" ><img src="https://poser.pugx.org/dcat/laravel-admin/v/stable" /></a> 
    <a href="https://packagist.org/packages/dcat/laravel-admin"><img src="https://img.shields.io/packagist/dt/dcat/laravel-admin.svg?color=" /></a> 
    <a><img src="https://img.shields.io/badge/php-8.3+-59a9f8.svg?style=flat" /></a> 
    <a><img src="https://img.shields.io/badge/laravel-13.x-59a9f8.svg?style=flat" ></a>
</p>

<p align=""><code>Dcat Admin</code>是一个基于 <a href="https://www.laravel-admin.org/" target="_blank">laravel-admin</a> 二次开发而成的后台系统构建工具，只需很少的代码即可快速构建出一个功能完善的高颜值后台系统。内置丰富的后台常用组件，开箱即用，让开发者告别冗杂的 HTML 代码，对后端开发者非常友好。</p>

- [官方网站](http://www.dcatadmin.com)
- [中文文档](https://learnku.com/docs/dcat-admin)
- [English documentions](http://www.dcatadmin.com/docs/en-2.x/quick-start.html)
- [Demo / 在线演示](http://103.39.211.179:8080/admin)
- [Demo 源码](https://github.com/jqhph/dcat-admin-demo)
- [Demo 源码 (码云)](https://gitee.com/jqhph/dcat-admin-demo)
- [扩展](#extensions)

![](https://cdn.learnku.com/uploads/images/202101/28/38389/YLmL7PLqH7.png!large)

---

## 目录

- [功能特性](#功能特性)
- [环境要求](#环境要求)
- [安装](#安装)
  - [1. 创建 Laravel 项目](#1-创建-laravel-项目)
  - [2. 配置数据库](#2-配置数据库)
  - [3. 安装 Dcat Admin](#3-安装-dcat-admin)
  - [3a. 引用 GitHub 开发版本](#3a-引用-github-开发版本)
  - [4. 发布资源](#4-发布资源)
  - [5. 运行安装命令](#5-运行安装命令)
  - [6. 配置 Web 服务器](#6-配置-web-服务器)
  - [7. 访问后台](#7-访问后台)
- [使用说明](#使用说明)
- [配置说明](#配置说明)
- [前端资源构建](#前端资源构建)
- [运行测试](#运行测试)
- [常见问题](#常见问题)
- [扩展](#extensions)
- [鸣谢](#鸣谢)
- [License](#license)

---

## 功能特性

- [x] 简洁优雅、灵活可扩展的 API
- [x] 用户管理
- [x] RBAC 权限管理，支持无限级权限节点
- [x] 菜单管理
- [x] 使用 pjax 构建无刷新页面，支持**按需加载**静态资源，可以无限扩展组件而不影响整体性能
- [x] 松耦合的页面构建与数据操作设计，可轻松切换数据源
- [x] 自定义页面
- [x] 自定义主题配色
- [x] 多主题切换功能，内置多种主题色
- [x] 可轻松构建无菜单栏的独立页面（如可用于构建弹窗选择器等功能）
- [x] 插件功能
- [x] 可视化代码生成器，可根据数据表一键生成增删改查页面
- [x] 数据表格构建工具，内置丰富的表格常用功能（如组合表头、数据导出、搜索、快捷创建、批量操作等）
- [x] 树状表格功能构建工具，支持分页和点击加载
- [x] 数据表单构建工具，内置丰富的表单类型，支持表单异步提交
- [x] 分步表单构建工具
- [x] 弹窗表单构建工具
- [x] 数据详情页构建工具
- [x] 无限层级树状页面构建工具，支持用拖拽的方式实现数据的层级、排序等操作
- [x] 内置丰富的常用页面组件（如图表、数据统计卡片、下拉菜单、Tab 卡片、提示工具等）
- [x] `Section` 功能（类似 `Wordpress` 的 `Filter` 和 `blade` 模板的 `section` 标签）
- [x] 异步文件上传表单，支持分块多线程上传
- [x] 多应用
- [ ] 插件市场，只需在管理页面轻轻点击鼠标即可完成插件的安装、更新和卸载等操作

---

## 环境要求

| 依赖 | 版本要求 |
|------|---------|
| PHP | >= 8.3 |
| Laravel | ~13.0 |
| 扩展 | Fileinfo PHP Extension |
| 数据库 | MySQL / MariaDB / PostgreSQL / SQLite |

> **注意**：当前版本 `2.x` 对应 Laravel 13.x 及 PHP 8.3+。旧版 Laravel（5.5 ~ 9.x）请使用 `dcat/laravel-admin` 的 `1.x` 版本。

---

## 安装

> Dcat Admin 是一个 Composer 包，需要安装在已有的 Laravel 项目中。以下步骤将引导您从零开始完成安装。

### 1. 创建 Laravel 项目

如果您还没有 Laravel 项目，请先创建一个：

```bash
composer create-project --prefer-dist laravel/laravel 项目名称
```

> 如果您是第一次使用 `Laravel`，请务必先阅读官方文档：[Laravel 安装指南](https://learnku.com/docs/laravel/11.x/installation)。

### 2. 配置数据库

创建好项目后，编辑项目根目录下的 `.env` 文件，设置数据库连接信息：

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=your_password
```

请确保数据库已创建且连接信息正确。

### 3. 安装 Dcat Admin

进入项目目录，使用 Composer 安装（从 Packagist 安装发布版本）：

```bash
cd 你的项目目录

composer require dcat/laravel-admin
```

> 如果安装速度慢，可配置国内 Composer 镜像源：
> ```bash
> composer config -g repos.packagist composer https://mirrors.aliyun.com/composer/
> ```

### 3a. 引用 GitHub 开发版本

如果您想抢先体验未发布的最新代码，或需要对包代码作出修改并提交 PR，可以在宿主项目的 `composer.json` 中添加 `repositories` 配置，指向本仓库的 GitHub 地址：

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/jqhph/dcat-admin"
        }
    ],
    "require": {
        "dcat/laravel-admin": "dev-master"
    }
}
```

然后运行：

```bash
composer update dcat/laravel-admin
```

Composer 会直接从 GitHub 拉取源码。

> **注意**：使用 `vcs` 类型时，宿主项目 `composer.json` 中的 `minimum-stability` 可能需要设为 `"dev"` 并配合 `"prefer-stable": true`。

### 4. 发布资源

运行以下命令发布配置、语言包、前端资源等：

```bash
php artisan admin:publish
```

该命令会生成配置文件 `config/admin.php`，您可以在其中修改后台访问路径、数据库连接以及数据表名等。**建议初次安装时使用默认配置，无需修改。**

### 5. 运行安装命令

执行安装命令来创建数据表并写入初始数据：

```bash
php artisan admin:install
```

**常见错误处理**：

- **`Specified key was too long ... 767 bytes`**：如果出现此错误，请在 `app/Providers/AppServiceProvider.php` 文件的 `boot` 方法中加入以下代码：

  ```php
  use Illuminate\Support\Facades\Schema;
  
  public function boot()
  {
      Schema::defaultStringLength(191);
  }
  ```

  然后删除数据库中已创建的表，重新运行 `php artisan admin:install` 即可。

- **`Target class [Dcat\Admin\.....] does not exist`**：运行 `composer dump-autoload` 重新生成自动加载文件后重试。

### 6. 配置 Web 服务器

**需要将 Web 服务器的 `document root` 指向 Laravel 项目的 `public` 目录。**

#### Nginx 配置示例

```nginx
server {
    listen 80;
    server_name your-domain.com;
    root /your-project-path/public;

    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }
}
```

#### Apache 配置

Laravel 自带 `public/.htaccess` 文件，确保 Apache 开启了 `mod_rewrite` 模块即可。

### 7. 访问后台

启动开发服务器：

```bash
php artisan serve
```

在浏览器中访问 `http://localhost/admin`，使用以下默认账号登录：

| 用户名 | 密码 |
|--------|------|
| `admin` | `admin` |

> **安全提示**：首次登录后请及时修改默认密码！

---

## 使用说明

> 更多使用说明（如何创建页面、数据表格、表单、代码生成器）请参阅 [官方文档](https://learnku.com/docs/dcat-admin)。

---

## 配置说明

安装完成后，配置文件位于 `config/admin.php`，常用配置项如下：

| 配置项 | 默认值 | 说明 |
|--------|--------|------|
| `name` | `Dcat Admin` | 站点名称，显示在登录页面 |
| `logo` | `<img...>` | 后台 Logo |
| `route.prefix` | `admin` | 后台访问路径前缀 |
| `route.domain` | `null` | 后台绑定的域名 |
| `auth.guard` | `admin` | 认证守卫 |
| `layout.color` | `default` | 主题色（default / blue / blue-light / green） |
| `layout.horizontal_menu` | `false` | 是否启用水平菜单 |
| `layout.sidebar_collapsed` | `false` | 是否默认收起侧边栏 |
| `layout.dark_mode_switch` | `false` | 是否启用暗色模式切换 |
| `upload.disk` | `public` | 文件上传磁盘 |
| `database.connection` | `''` | 数据库连接（为空则使用默认连接） |

可通过 `.env` 文件覆盖部分配置：

```dotenv
ADMIN_ROUTE_PREFIX=admin
ADMIN_HTTPS=true
ADMIN_ASSETS_SERVER=https://cdn.example.com
```

---

## 前端资源构建

如果您是 Dcat Admin 包的**开发者**或需要**自定义前端资源**，可按以下步骤构建：

### 环境准备

确保已安装 Node.js（推荐 18+）和 npm/yarn。

### 安装依赖

```bash
npm install
```

### 构建命令

| 命令 | 说明 |
|------|------|
| `npm run dev` | 开发模式构建（含 source map） |
| `npm run prod` | 生产模式构建（压缩、无 source map） |

构建产物输出到：

- **开发模式**：`resources/pre-dist/`
- **生产模式**：`resources/dist/`

> 不需要修改前端的普通用户无需执行此步骤，`php artisan admin:publish` 命令会自动发布预构建的资源文件。

---

## 运行测试

Dcat Admin 包含 PHPUnit 单元测试和 Laravel Dusk 浏览器测试。

### 运行单元测试

```bash
vendor/bin/phpunit
```

### 运行静态分析（PHPStan）

```bash
vendor/bin/phpstan analyse
```

### 运行浏览器测试（Dusk）

需要先配置 `.env.testing` 中的数据库连接，然后运行：

```bash
php artisan dusk
```

> 浏览器测试需要 Chrome 浏览器及 ChromeDriver，请确保已安装。

---

## 常见问题

### 1. 安装后访问 `http://localhost/admin` 出现 404

- 确认已正确运行 `php artisan admin:install`，且没有报错
- 确认 Web 服务器 `document root` 指向了 `public` 目录
- 尝试运行 `php artisan route:list | grep admin` 查看路由是否注册成功

### 2. 页面样式错乱（CSS/JS 加载失败）

- 确保已运行 `php artisan admin:publish` 发布前端资源
- 检查 `public/vendor/dcat-admin` 目录是否存在
- 如果使用 HTTPS，需要在 `.env` 中设置 `ADMIN_HTTPS=true`
- 运行 `php artisan vendor:publish --tag=dcat-admin-assets --force` 重新发布静态资源

### 3. 上传文件失败

- 检查 `storage` 目录是否可写：`chmod -R 775 storage`
- 检查 `config/admin.php` 中 `upload.disk` 的配置
- 确保 `php artisan storage:link` 已运行创建符号链接

### 4. 修改配置不生效

- 清空配置缓存：`php artisan config:clear`
- 如果修改了路由前缀，需要同步修改 `config/admin.php` 中的 `route.prefix`

### 5. 自定义登录页面

在 `config/admin.php` 中修改 `auth.controller` 为你自定义的认证控制器。

---

<a name="extensions"></a>

## 扩展

| 扩展 | 描述 | dcat-admin 版本 |
|------|------|----------------|
| [mosiboom/dcat-iframe-tab](https://github.com/mosiboom/dcat-iframe-tab) | IFRAME TAB 标签切换 | 2.x |
| [super-eggs/dcat-distpicker](https://github.com/super-eggs/dcat-distpicker) | 省市区联动 | 2.x |
| [ueditor](https://github.com/jqhph/dcat-admin-ueditor) | 百度在线编辑器 | 1.x |
| [grid-sortable](https://github.com/jqhph/dcat-admin-grid-sortable) | 表格拖曳排序工具 | 1.x |

---

## 鸣谢

`Dcat Admin` 基于以下组件:

+ [Laravel](https://laravel.com/)
+ [Laravel Admin](https://www.laravel-admin.org/)
+ [AdminLTE3](https://github.com/ColorlibHQ/AdminLTE)
+ [bootstrap4](https://getbootstrap.com/)
+ [jQuery3](https://jquery.com/)
+ [Eonasdan Datetimepicker](https://github.com/Eonasdan/bootstrap-datetimepicker/)
+ [font-awesome](http://fontawesome.io)
+ [jquery-form](https://github.com/jquery-form/form)
+ [moment](http://momentjs.com/)
+ [webuploader](http://fex.baidu.com/webuploader/)
+ [jquery-pjax](https://github.com/defunkt/jquery-pjax)
+ [Nestable](http://dbushell.github.io/Nestable/)
+ [toastr](http://codeseven.github.io/toastr/)
+ [editor-md](https://github.com/pandao/editor.md)
+ [fontawesome-iconpicker](https://github.com/itsjavi/fontawesome-iconpicker)
+ [layer 弹出层](http://layer.layui.com/)
+ [char.js](https://www.chartjs.org)
+ [nprogress](https://ricostacruz.com/nprogress/)
+ [bootstrap-validator](https://github.com/1000hz/bootstrap-validator)
+ [Google map](https://www.google.com/maps)
+ [Tencent map](http://lbs.qq.com/)

---

## Contributors

### Code Contributors

This project exists thanks to all the people who contribute. [[Contribute](CONTRIBUTING.md)].
<a href="https://github.com/jqhph/dcat-admin/graphs/contributors"><img src="https://opencollective.com/dcat-admin/contributors.svg?width=890&button=false" /></a>

### Financial Contributors

Become a financial contributor and help us sustain our community. [[Contribute](https://opencollective.com/dcat-admin/contribute)]

#### Individuals

<a href="https://opencollective.com/dcat-admin"><img src="https://opencollective.com/dcat-admin/individuals.svg?width=890"></a>

#### Organizations

Support this project with your organization. Your logo will show up here with a link to your website. [[Contribute](https://opencollective.com/dcat-admin/contribute)]

<a href="https://opencollective.com/dcat-admin/organization/0/website"><img src="https://opencollective.com/dcat-admin/organization/0/avatar.svg"></a>
<a href="https://opencollective.com/dcat-admin/organization/1/website"><img src="https://opencollective.com/dcat-admin/organization/1/avatar.svg"></a>
<a href="https://opencollective.com/dcat-admin/organization/2/website"><img src="https://opencollective.com/dcat-admin/organization/2/avatar.svg"></a>
<a href="https://opencollective.com/dcat-admin/organization/3/website"><img src="https://opencollective.com/dcat-admin/organization/3/avatar.svg"></a>
<a href="https://opencollective.com/dcat-admin/organization/4/website"><img src="https://opencollective.com/dcat-admin/organization/4/avatar.svg"></a>
<a href="https://opencollective.com/dcat-admin/organization/5/website"><img src="https://opencollective.com/dcat-admin/organization/5/avatar.svg"></a>
<a href="https://opencollective.com/dcat-admin/organization/6/website"><img src="https://opencollective.com/dcat-admin/organization/6/avatar.svg"></a>
<a href="https://opencollective.com/dcat-admin/organization/7/website"><img src="https://opencollective.com/dcat-admin/organization/7/avatar.svg"></a>
<a href="https://opencollective.com/dcat-admin/organization/8/website"><img src="https://opencollective.com/dcat-admin/organization/8/avatar.svg"></a>
<a href="https://opencollective.com/dcat-admin/organization/9/website"><img src="https://opencollective.com/dcat-admin/organization/9/avatar.svg"></a>

---

## License

`dcat-admin` is licensed under [The MIT License (MIT)](LICENSE).
