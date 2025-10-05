<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue + Laravel Challenges</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    <div class="page-wrapper">
        <div class="page-content">
            <header class="page-header">
                <span class="badge">Vue &amp; Laravel Lab</span>
                <h1>Vue Components</h1>
                <p>Explore the mini challenges below to see fundamentals like data binding, conditional UI, API calls, and Laravel integrations in action.</p>
            </header>

            <div id="app">
                <div class="cards-grid">
                    <section class="card" data-task="Task 1">
                        <h2>Data Binding</h2>
                        <p class="card__summary">Two-way binding keeps the input and preview synced in real time.</p>
                        <div class="card__body">
                            <data-binding></data-binding>
                        </div>
                    </section>

                    <section class="card" data-task="Task 2">
                        <h2>Conditional Rendering</h2>
                        <p class="card__summary">Toggle the authentication state to see how the UI adapts instantly.</p>
                        <div class="card__body">
                            <conditional-render></conditional-render>
                        </div>
                    </section>

                    <section class="card" data-task="Task 5">
                        <h2>API Items</h2>
                        <p class="card__summary">Fetch a simple list from the Laravel API using Axios with loading and error states.</p>
                        <div class="card__body">
                            <api-items></api-items>
                        </div>
                    </section>

                    <section class="card" data-task="Task 6">
                        <h2>Products</h2>
                        <p class="card__summary">Products are powered by the database-backed API. Run migrations &amp; seed data to see them.</p>
                        <div class="card__body">
                            <products-list></products-list>
                        </div>
                        <p class="hint-text">Tip: run <code>php artisan migrate --seed</code> or create products manually.</p>
                    </section>

                    <section class="card" data-task="Task 7">
                        <h2>Event Handling</h2>
                        <p class="card__summary">Button click events update state and re-render the message instantly.</p>
                        <div class="card__body">
                            <event-handling></event-handling>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
