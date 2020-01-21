# ActionByDomainInLaravel
本專案是個實驗性質用途，嘗試如何根據不同環境跟網域來決定要走那個router/controller

環境 example-dev.com / example-staging.com / example.com
搭配的網域 apple / banana

當進入apple.example-dev/show 時，網頁會顯示 This is apple controller
當進入banana.example-dev/show 時，網頁會顯示 This is banana controller

當不論是apple或banana都是走到相同的地方時，則會共用功能，例如 common.php

主要決策路徑的判斷，寫在 app/Providers/RouteServiceProvider.php
