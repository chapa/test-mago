A test project to show the bug described in https://github.com/carthage-software/mago/issues/1237

## How to run

1. Clone the repository
2. Run `composer install`
3. Run `composer analyze`

## Expected result

The static analysis should complete without errors.

## Actual result

The static analysis fails with the following error:

```
error[non-existent-method]: Method `assertequals` does not exist on type `Tests\MyTest`.
   ┌─ tests/MyTest.php:13:16
   │
13 │         $this->assertEquals(2, 1 + 1);
   │         -----  ^^^^^^^^^^^^ This method selection is invalid
   │         │
   │         This expression has type `Tests\MyTest`
   │
   = Help: Ensure the `assertequals` method is defined in the `Tests\MyTest` class-like.

error: found 1 issues: 1 error(s)
```

## How to solve

Uncomment the exclusion in `mago.toml` and run the analysis again.
