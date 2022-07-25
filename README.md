# Back-end Challenge

Väljakutse tulevastele PHP-le orienteeritud DIVERSITY back-end programmeerijatele.
_A challenge for future PHP-oriented DIVERSITY back-end programmers._

## Sissejuhatus (_Introduction_)

Töötage välja **REST API**, mis teeb valuuta konverteerimist.
_Develop a **REST API** that does currency conversion._

**Spetsifikatsioonid (_Specifications_)**:

* Taotluse URL peaks olema järgmises formaadis (_The application URL should be in the following format_):
   * http://localhost:8000/exchange/{amount}/{from}/{to}
   * http://localhost:8000/exchange/10/BTC/EUR
* Vastus peaks olema järgmises vormis (_The answer should be in the following format_):
   ```json
   {
     "exchangeValue": 45,
     "exchangeSimbol": "€"
   }
   ```
* Konversioonid (_Conversions_):
    * Alates BTC et EUR (_From BTC to EUR_)
    * EUR-st BTC-sse (_From EUR to BTC_)
    * BTC-st USD-sse (_From BTC to USD_)
    * USD-st BTC-sse (_From USD to BTC_)
* Nõuete valideerimiseks viiakse läbi automatiseeritud testid (_Automated tests will be run to validate the requirements_):
   * Käivitage PHP Embedded Server: (_Start the PHP Embedded Server_): `php -S localhost:8000 index.php`
   * Testide käivitamine (_Launch the tests_): `composer test`
   * Käivitage lint (_Launch lint_): `composer lint`

## Juhised (_Instructions_)

1. Fork seda repositooriumi ja luua haru oma ees- ja perekonnanimega (näide: john-smith) (_Fork this repository and create a branch with your first and last name (example: john-smith)_).
2. Pärast väljakutse lõpetamist looge Pull Request (_After finishing the challenge, create a Pull Request._).
 
*Märkus: Ärge unustage käivitada `composer test` ja `composer lint` lokaalselt.*
_*Note: Don't forget to run `composer test` and `composer lint` locally.*_

## Eeltingimused (_Prerequisites_)

* PHP => 7.4
* Objektipõhine (_Object-oriented_)