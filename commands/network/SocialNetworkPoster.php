<?php

namespace app\commands\network;

abstract class SocialNetworkPoster
{
    /**
     * Фактический фабричный метод. Обратите внимание, что он возвращает абстрактный коннектор.
     *  Это позволяет подклассам возвращать любые конкретные коннекторы без нарушения контракта суперкласса.
     */
    abstract public function getSocialNetwork();

    /**
     * Когда фабричный метод используется внутри бизнес-логики Создателя, подклассы могут изменять логику
     * косвенно, возвращая из фабричного метода различные типы коннекторов.
     */
    /* @param $content - need comment, because will appear WARNING */

    public function post($content)
    {
        // Вызываем фабричный метод для создания объекта Продукта...
        $network = $this->getSocialNetwork();
        // ...а затем используем его по своему усмотрению.
        $network->logIn();
        $network->createPost($content);
        $network->logout();
    }
}

