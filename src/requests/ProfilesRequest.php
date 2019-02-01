<?php

namespace saad3074\Bambora\requests;

class ProfilesRequest extends Request
{
    /**
     * Create a new Payment Profile using either a card or a single-use token. You must supply one of them.
     *
     * @param $profileBody
     * @return mixed
     */
    public function createProfile($profileBody)
    {
        return $this->setUrl($this->endpoint->getCreateProfileUrl())
            ->setMethod($this->endpoint->getCreateProfileMethod())
            ->setRequestData($profileBody)
            ->sendData();
    }

    /**
     * Get a Payment Profile using the profile ID, also known as the Customer Code.
     *
     * @param $profileId
     * @return mixed
     */
    public function getProfile($profileId)
    {
        return $this->setUrl($this->endpoint->getProfileUrl($profileId))
            ->setMethod($this->endpoint->getProfileMethod())
            ->sendData();
    }

    /**
     * Update an existing Payment Profile. For a single card profile supplying token or card data will work.
     * For multi-card profiles you have to update the card data with the update and delete card endpoints.
     *
     * @param $profileId
     * @param $profileBody
     * @return mixed
     */
    public function updateProfile($profileId, $profileBody)
    {
        return $this->setUrl($this->endpoint->getUpdateProfileUrl($profileId))
            ->setMethod($this->endpoint->getUpdateProfileMethod())
            ->setRequestData($profileBody)
            ->sendData();
    }

    /**
     * Delete a Payment Profile using the profile ID, also known as the Customer Code.
     *
     * @param $profileId
     * @return mixed
     */
    public function deleteProfile($profileId)
    {
        return $this->setUrl($this->endpoint->getDeleteProfileUrl($profileId))
            ->setMethod($this->endpoint->getDeleteProfileMethod())
            ->sendData();
    }

    /**
     * Get all of the cards on the profile.
     *
     * @param $profileId
     * @return mixed
     */
    public function getCards($profileId)
    {
        return $this->setUrl($this->endpoint->getCardsUrl($profileId))
            ->setMethod($this->endpoint->getCardsMethod())
            ->sendData();
    }

    /**
     * Add a card to the profile. Note that there is a default limit of 1 card per profile.
     * You can change this in your Profiles settings in the back office.
     *
     * @param $profileId
     * @param $profileBodyCard
     * @return mixed
     */
    public function addCard($profileId, $profileBodyCard)
    {
        return $this->setUrl($this->endpoint->getAddCardUrl($profileId))
            ->setMethod($this->endpoint->getAddCardMethod())
            ->setRequestData($profileBodyCard)
            ->sendData();
    }

    /**
     * Get the details of a card on the profile.
     *
     * @param $profileId
     * @param $cardId
     * @return mixed
     */
    public function getCard($profileId, $cardId)
    {
        return $this->setUrl($this->endpoint->getCardUrl($profileId, $cardId))
            ->setMethod($this->endpoint->getCardMethod())
            ->sendData();
    }

    /**
     * Update the details of a card on the profile.
     *
     * @param $profileId
     * @param $cardId
     * @param $profileBodyCard
     * @return mixed
     */
    public function updateCard($profileId, $cardId, $profileBodyCard)
    {
        return $this->setUrl($this->endpoint->getUpdateCardUrl($profileId, $cardId))
            ->setMethod($this->endpoint->getUpdateCardMethod())
            ->setRequestData($profileBodyCard)
            ->sendData();
    }

    /**
     * Delete a card on the profile.
     *
     * @param $profileId
     * @param $profileBodyCard
     * @return mixed
     */
    public function deleteCard($profileId, $profileBodyCard)
    {
        return $this->setUrl($this->endpoint->getDeleteCardUrl($profileId, $profileBodyCard))
            ->setMethod($this->endpoint->getDeleteCardMethod())
            ->sendData();
    }
}
