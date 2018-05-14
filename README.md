# Slack Idea Bot

A simple bot to share ideas and get feedback.

## Install the Application

* Import `db-dump.sql` in your database
* Create the two slack slash commands `/new-idea` and `/inspire` (see: [Slack Slash Commands](https://api.slack.com/slash-commands))
* Fill out `env` with keys
* Run `composer install`
* Run `composer start` to test the app locally
* To deploy the app set ` 'displayErrorDetails' => false, ` in `src/settings.php`

That's it! Now go and share your ideas.

## Author
[@dome4](https://github.com/dome4)
