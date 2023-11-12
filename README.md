# Soca

## Aim

This mono repo contains my Soca named framework source code and its example. As further it will be split to multiple dedicated repositories.

## Influences

- Laravel's light and quick to write code
- Symfony's Java Spring's bureaucratic style

## Style

- Explicit dependencies via constructor or autowiring by decorated class properties, creating instances via `app()` function is forbidden
- Easy to use function that are close to functional programming's pure function - only input is passed arguments and only output - return
  - As possible less side effects
  - Non-business logic related function are allowed - like `log()`

## Ground rules

- only allowed project dependencies:
  - platform related(like json and xml)
  - interfaces(like PSR)
  - written by me