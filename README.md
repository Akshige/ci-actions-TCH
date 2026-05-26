# ci-actions-TCH

![CI TCH](https://github.com/Akshige/ci-actions-TCH/actions/workflows/ci.yml/badge.svg?branch=main)

Repositori per a l'exercici d'integració contínua amb GitHub Actions.

## Descripció

Aquest projecte conté una classe `Calculadora` simple escrita en PHP, juntament amb tests de PHPUnit, per practicar la configuració de pipelines de CI/CD amb GitHub Actions.

## Workflows

- **Hola Actions TCH**: Workflow manual de salutació.
- **CI TCH**: Pipeline d'integració contínua que s'executa automàticament en cada `push` i `pull request` a la branca `main`. Prova el codi amb les versions de PHP 8.1, 8.2 i 8.3 en paral·lel.

## Estructura del projecte

```
src/Calculadora.php       # Classe a provar
tests/CalculadoraTest.php # Tests de PHPUnit
.github/workflows/        # Configuració de GitHub Actions
```

## Com provar en local

```bash
composer install
./vendor/bin/phpunit
```

## Autor

- **Nom**: Tomás Carcedo Hernández
