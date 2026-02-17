<?php

declare(strict_types=1);

namespace DPD\Models\Request;

use DPD\Models\AbstractModel;

/**
 * Change Password Request DTO
 * 
 * Used for changing user password
 */
class ChangePasswordDTO extends AbstractModel
{
    public function getCurrentPassword(): ?string
    {
        return $this->get('currentPassword');
    }

    public function setCurrentPassword(?string $currentPassword): self
    {
        $this->set('currentPassword', $currentPassword);
        return $this;
    }

    public function getNewPassword(): ?string
    {
        return $this->get('newPassword');
    }

    public function setNewPassword(?string $newPassword): self
    {
        $this->set('newPassword', $newPassword);
        return $this;
    }

    public function getConfirmPassword(): ?string
    {
        return $this->get('confirmPassword');
    }

    public function setConfirmPassword(?string $confirmPassword): self
    {
        $this->set('confirmPassword', $confirmPassword);
        return $this;
    }
}
