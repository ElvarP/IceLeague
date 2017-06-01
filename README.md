# Hvað er þetta?

IceLeague er vefsíða sem sýnir upplýsingar um Íslenska League of Legends spilara með gögnum í gegnum forritunarviðmótið (API) hjá Riot Games.

Linkur á síðu: http://iceleague.is

## Setja upp

Verður að vera með [Composer](https://getcomposer.org/) og API lykil frá [Riot Games](https://developer.riotgames.com/)

```
$ composer install
```

Síðan verður þú að breyta öllum stillingum í config-sample.php og endurnefna skrána í config.php

Last but not least, þá þarf að setja upp gagnagrunninn með iceleague_tables.sql

## Tækni notuð

* [LeagueWrap](https://github.com/LeaguePHP/LeagueWrap) - League of legends API wrapper
* [DataTables](datatables) - jQuery plugin fyrir tables (sorting, searching o.fl.)
* [Bootstrap](https://getbootstrap.com/) - CSS Framework
* [Bootswatch flatly](https://bootswatch.com/flatly/) - Bootstrap Theme

## Má gera pull requests?

Já, endilega! Go wild.


## Þekktir gallar

 * Allir myndir af nýjum hetjum eftir patch 7.10.1 virka ekki útaf ég notaði breytu fyrir version number fyrir Data Dragon.

Ekkert annað sem ég veit af í augnablikinu.

## Leyfi

MIT License

Copyright (c) 2017 IceLeague

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
