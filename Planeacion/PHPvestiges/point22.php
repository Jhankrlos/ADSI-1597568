<?php

/**
 * The sessions follow a simple workflow. When a session starts, PHP will
 *  retrieve an existing session using the last ID (usually from a session
 *  cookie) or, if a session is not passed, a new session will be created.
 *  PHP will populate the superglobal variable $_SESSION with any session
 *  data from the logged in session.
 */

session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}