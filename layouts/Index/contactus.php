<?php defined('_EXEC') or die; ?>

<main>
    <form name="contact_us">
        <input type="text" name="name" placeholder="{$lang.name}">
        <input type="email" name="email" placeholder="{$lang.email}">
        <input type="text" name="phone" placeholder="{$lang.phone}">
        <textarea name="message" placeholder="{$lang.message}"></textarea>
        <button type="submit">{$lang.submit}</button>
    </form>
</main>
