# Manuals-generator

<img src="https://github.com/X00Byte/Manuals-generator/blob/main/Includes/imgs/repo_background.png" alt="Logo">
<div align="center">
<h2>
<p>
إنشاء دلائل تعليمية بسهولة
</p>  
Easly create educational manuals
</h2>
</div>

## الدليل باللغة العربية
1.  المتطلبات القبلية 
*  خادم ويب مع معبر لغة "بي إتش بي " (ننصحك بحزمة XAMPP )

2. لماذا ؟
عندما تتعلم لغة برمجية ، تقنية جديدة ... ، يكون تدوين المطلحات والأوامر أمرا هاما لترسيخ ماتعلمته ، وحيث أن تسجيل ماسبق في ملف نصي أو "ورد" يمكن أن يفي بالغرض نسبيا ، إلا أن هذا المشروع سيكون أكثر فعالية وسهولة في مساعدتك على تدوين وتنظيم معارفك .

3. طريقة التشغيل
- إفتح الطرفية في المسار الذي تفضلة 

```bash
git clone https://github.com/X00Byte/Manuals-generator.git
```
- ثبت الإعتماديات  - bootstrap
```bash
inpm install 
```
- إنقل المشروع إلى مجلد الإستضافة الخاص بخادم الويب 
مثال خادم أباشي - APACHE SERVER  على xampp:

```bash
sudo cp -R  ./Manuals-generator/ /opt/lampp/htdocs/
```
* أو
داخل ملف المشروع شغل الخادم المحلي الخاص باللغة 

```bash
sudo php -S localhost:8000
```
- شغل خادم الويب  
- إفتح متصفحك المفضل : 
```bash
http://localhost/Manuals-generator/
```
* أو
في حال إستخدمت الخادم المحلي الخاص باللغة 
```bash
http://localhost:8000
```

4. قدراتك البرمجية الخارقة مطلوبة :
  
<div align="center">
    هذا المشروع المتواضع لايزال في طفولته المبكرة ، لذا إن إكتشفت خطأ ما:
   <a href="https://github.com/L-mohamed/PHPmanualsGenerator/issues">أبلغ عن خطأ</a>    
   <br>  
    لديك إقتراح لتطويره أو إضافة ميزة جديدة :
  <a href="https://github.com/L-mohamed/PHPmanualsGenerator/issues">أطلب ميزة جديدة</a>
</div>                                                                                       
      
## English manual 

1. Prerequisite
* Web server with PHP Interpreter , (Xammp Recommended) 

2. Why ?
When you learn a programming language, a new technology..., writing down terms and commands is important to consolidate what you have learned, and while recording what you have previously done in a text file or “Word” can relatively suffice for the purpose, this project will be more effective and easier in helping you write down and organize Your information and learning about a technical topic (E.G new Programming language , os commands ...).

3. Usage :
- Open the terminal in the path you prefer
```bash
git clone https://github.com/L-mohamed/PHPmanualsGenerator.git
```
- Move the project to the web server's hosting folder
Apache server example:
```bash
sudo cp -R  ./Manuals-generator/ /opt/lampp/htdocs
```
- Run the web server
- Open your favorite browser:
```bash
http://localhost/Manuals-generator/
```
4. Participate in improvement

<div align="center">
   This modest project still in its early stages, so if you spot an error:
   <a href="https://github.com/L-mohamed/PHPmanualsGenerator/issues">Report an error</a>    
   <br>  
   You have a suggestion to develop or add a new feature:
   <a href="https://github.com/L-mohamed/PHPmanualsGenerator/issues">Request a new feature</a>
</div>    