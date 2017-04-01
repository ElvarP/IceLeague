# Hvað er þetta?

IceLeague er vefsíða sem sýnir upplýsingar um Íslenska League of Legends spilara með gögnum í gegnum forritunarviðmótið (API) hjá Riot Games.

Link á síðu: http://iceleague.is

## Getting Started

Verður að vera með API key frá Riot Games https://developer.riotgames.com/

Ætti að virka að downloada frá githubbinu og setja upp öll tables (iceleague_tables.sql) og auðvitað breyta config.php

## Built With

* [Bootstrap](https://getbootstrap.com/) - Framework (theme frá [Bootswatch](https://bootswatch.com/flatly/))
* [DataTables](datatables) - jQuery plugin fyrir tables (sorting, searching o.fl.)
* [LeagueWrap](https://github.com/LeaguePHP/LeagueWrap) - League of legends API wrapper

## Contributing

Ef þú sérð eitthvað sem má betrumbæta eða sem þarf að laga þá máttu endilega gerðu pull request.

Nokkrar hugmyndir sem má hægt er að bæta við síðuna (at the top of my head)

+ Listi yfir Íslenska streamara
+ Match history fyrir spilara
+ Detailed stats þegar maður klikkar á spilara
+ Safna fleiri stats um spilara (Akkurat nuna safnar síðan bara Ranked stats, League stats, og Champion Mastery Stats)
+ Safna upplýsingum um notendur í rauntíma í staðinn fyrir að nota cronjob á klukkutíma fresti
+ Bæta við Cronjob Logs

Ástæðan afhverju ég er ekki buinn að bæta þessu við flestum af þessum hugmyndum er vegna þess að þá er síðan orðinn mjög svipuð öðrum síðun eins og [op.gg](https://op.gg/) og [lolking.net](https://lolking.net) sem var ekki tilgangurinn að síðunni.

## Known bugs

Ekkert sem ég veit af í augnablikinu.

## License

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
