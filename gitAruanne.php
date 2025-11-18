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
        git config --global --list
    </pre>
</li>
<li>
    Ssh võti loomine
    <pre>
        ssh-keygen -o -t rsa -C "milan.petrovski8@gmail.com"
    </pre>
    id_rsa.pub võti kopeeritakse githubi nägu deploy key
</li>
<li>
    Jälgimise lisamine ja commit'i tegemine
    <pre>
        git status
        git add .
        git commit -a -m "{text}"
        git push
    </pre>
</li>
<?php
echo "<li>GITHUB projektiga sidumine>";
