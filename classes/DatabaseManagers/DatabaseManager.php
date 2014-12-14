<?php

abstract class DatabaseManager {
    public abstract function connectToDB();
    public abstract function disconnectFromDB();
}
