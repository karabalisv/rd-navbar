<h3>
    Настройка линковщика
</h3>

<p>
    RD Navbar также поддерживает возможность линкования текущего лейаута на другие элементы. Так, например, в демо, лейаут навбара
    залинкован на тег html для демонстрации. Таким образом, при смене лейаута навбара, класс лейаута изменяется не только на самом
    навбаре, но и на залинкованых элементах с добавлением посфикса -linked.
</p>

<p>
    Так, при активном лейауте .rd-navbar-fixed, на тег html  будет добавлен класс .rd-navbar-fixed-linked
</p>

<p>
    Данный функционал будет очень полезен для магазинов, где вне панели навигации в виде сайдбара обычно отображается
    фильтр продуктов. Используя линковщик RD Navbar, можно очень легко и удобно визуально поместить данный сайдбар
    на панель навбара в виде переключателя фильтра продуктов.
</p>

<p>
    Для того, чтобы залинковать соответствующие элементы страницы вне навбара необходимо воспользоваться атрибутом linkedElements,
    где в качестве значения передается массив целевых HTML элементов или css селекторы для их выборки.
</p>

<code>
<pre>
...
   o = $('.rd-navbar');

   o.RDNavbar({
      linkedElements: [".magento-sidebar", $('.something-else')[0]]
   })
...
</pre>
</code>