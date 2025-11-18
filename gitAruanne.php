<?php
echo "<h2>GIT käsud</h2>";
echo "<ol>";
echo "<li>Repo loomine";
echo "<pre>git init</pre>";
echo "</li>";
?>
<li>Konfigureerimine
    <pre>
        git config --global user.name "melon3000"
        git config --global user.email "milan.petrovski8@gmail.com"
        git config --global --list</pre>
</li>
<li>
    Ssh võti loomine
    <pre>
        ssh-keygen -o -t rsa -C "milan.petrovski8@gmail.com"</pre>
    id_rsa.pub võti kopeeritakse githubi nägu deploy key
</li>
<li>
    Jälgimise lisamine ja commit'i tegemine
    <pre>
        git status
        git add .
        git commit -a -m "{text}"
        git push</pre>
</li>

<?php
echo "<li>GITHUB projektiga sidumine>";
echo "<pre>";
echo "
git remote add origin git@github.com:melon3000/webphp.git
git branch -M main
git push -u origin main
";
echo "</pre>";
echo "</li>";

echo "<li>Projektide kloneerimine desktopi.<br>
* kontrolli, et id_rsa võti on olemas .ssh kaustas<br>
* GIT CMD on lahti ja <br>";
echo"<pre>";
echo "git clone git@github.com:melon3000/webphp.git";
echo "</pre>";
echo "</li>";
echo "</ol>";
