<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Tasks for Today') ?></title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; background: #f5f6f8; color: #222; font-family: Arial, sans-serif; line-height: 1.5; }
        header { background: #fff; border-bottom: 1px solid #ddd; }
        nav, main, footer { width: min(100% - 32px, 960px); margin: 0 auto; }
        nav { display: flex; align-items: center; justify-content: space-between; min-height: 64px; }
        nav a { color: #1769aa; margin-left: 16px; text-decoration: none; }
        nav a:hover, nav a:focus { text-decoration: underline; }
        nav .brand { color: #222; font-size: 1.2rem; font-weight: bold; margin-left: 0; }
        main { padding: 40px 0; min-height: calc(100vh - 125px); }
        .card { background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 24px; }
        h1 { margin-top: 0; }
        .muted { color: #666; }
        table { border-collapse: collapse; margin-top: 20px; width: 100%; }
        th, td { border-bottom: 1px solid #ddd; padding: 12px 8px; text-align: left; }
        th { background: #f0f1f3; }
        .status { color: #1769aa; text-transform: capitalize; }
        footer { border-top: 1px solid #ddd; color: #666; font-size: .9rem; padding: 20px 0; }
        @media (max-width: 600px) {
            nav { align-items: flex-start; flex-direction: column; gap: 10px; padding: 16px 0; }
            nav a { margin-left: 0; margin-right: 16px; }
            main { padding: 24px 0; }
            .card { overflow-x: auto; }
        }
    </style>
</head>
<body>
    <header>
        <nav aria-label="Main navigation">
            <a class="brand" href="<?= base_url('/') ?>">Tasks for Today</a>
            <div>
                <a href="<?= base_url('/') ?>">Today</a>
                <a href="<?= base_url('tasks') ?>">All Tasks</a>
                <a href="<?= base_url('profile') ?>">Profile</a>
                <a href="<?= base_url('about') ?>">About</a>
            </div>
        </nav>
    </header>
    <main>
