<?php

namespace Bailangzhan\Result;

use Hyperf\Constants\AbstractConstants;
use Hyperf\Constants\Annotation\Constants;

/**
 * @Constants
 */
#[Constants]
class ErrorCode extends AbstractConstants
{
    /**
     * @Message("Server Error！")
     */
    public const SERVER_ERROR = 500;

    /**
     * @Message("success")
     */
    public const SUCCESS = 200;

    /**
     * @Message("error")
     */
    public const ERROR = 0;
}
