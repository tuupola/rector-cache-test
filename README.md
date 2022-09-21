```
$ git clone https://github.com/tuupola/rector-cache-test.git
$ cd rector-cache-test
$ composer install

$ vendor/bin/rector --dry-run
 1/1 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%
1 file with changes
===================

1) src/test.php:1

    ---------- begin diff ----------
@@ @@

 class Foo
 {
-    private $bar;
-
-    public function __construct($bar)
+    public function __construct(private $bar)
     {
-        $this->bar = $bar;
     }
 }
    ----------- end diff -----------

Applied rules:
 * ClassPropertyAssignToConstructorPromotionRector (https://wiki.php.net/rfc/constructor_promotion https://github.com/php/php-src/pull/5291)


[OK] 1 file would have changed (dry-run) by Rector

$ vendor/bin/rector --dry-run

[OK] Rector is done!

$ vendor/bin/rector --clear-cache --dry-run

1/1 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%
1 file with changes
===================

1) src/test.php:1

    ---------- begin diff ----------
@@ @@

 class Foo
 {
-    private $bar;
-
-    public function __construct($bar)
+    public function __construct(private $bar)
     {
-        $this->bar = $bar;
     }
 }
    ----------- end diff -----------

Applied rules:
 * ClassPropertyAssignToConstructorPromotionRector (https://wiki.php.net/rfc/constructor_promotion https://github.com/php/php-src/pull/5291)

 [OK] 1 file would have changed (dry-run) by Rector


$ vendor/bin/rector process

 [OK] Rector is done!

$ git diff


$ vendor/bin/rector --clear-cache process

1/1 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%
1 file with changes
===================

1) src/test.php:1

    ---------- begin diff ----------
@@ @@

 class Foo
 {
-    private $bar;
-
-    public function __construct($bar)
+    public function __construct(private $bar)
     {
-        $this->bar = $bar;
     }
 }
    ----------- end diff -----------

Applied rules:
 * ClassPropertyAssignToConstructorPromotionRector (https://wiki.php.net/rfc/constructor_promotion https://github.com/php/php-src/pull/5291)

 [OK] 1 file has been changed by Rector

$ git diff

diff --git a/src/test.php b/src/test.php
index 7275b2d..d6f9232 100644
--- a/src/test.php
+++ b/src/test.php
@@ -2,10 +2,7 @@

 class Foo
 {
-    private $bar;
-
-    public function __construct($bar)
+    public function __construct(private $bar)
     {
-        $this->bar = $bar;
     }
 }

```
