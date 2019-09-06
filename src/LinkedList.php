<?php

namespace App;

class LinkedList {
    private $firstNode = null;
    private $totalNodes = 0;

    public function insert(string $data=null)
    {
        $newNode = new ListNode($data);

        if ($this->firstNode === null) {
            $this->firstNode = &$newNode;
        } else {
            $currentNode = $this->firstNode;

            while($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }

            $currentNode->next = $newNode;
        }

        $this->totalNodes++;

        return true;
    }

    public function search($data)
    {
        if($this->totalNodes) {
            $currentNode = $this->firstNode;

            while($currentNode !== null) {
                if($currentNode->data === $data) {
                    return $currentNode;
                }
                $currentNode = $currentNode->next;
            }
            return false;
        }
        echo "Sorry! List is empty!";
    }

    public function display()
    {
        echo "Total nodes: ". $this->totalNodes . "\n";

        $currentNode = $this->firstNode;
        while($currentNode !== null) {
            echo $currentNode->data . PHP_EOL;
            $currentNode = $currentNode->next; 
        }
    }

    public function insertBefore(string $query = null, string $data = null)
    {
        $newNode = new ListNode($data);

        if($this->firstNode) {
            $prevNode = null;
            $currentNode = $this->firstNode;

            while($currentNode !== null) {
                if($currentNode->data === $query) {
                    $newNode->next = $currentNode;
                    $prevNode->next = $newNode;
                    $this->totalNodes++;
                    break;
                }
                $prevNode = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
    }

    public function insertAfter(string $query = null, string $data = null)
    {
        $newNode = new ListNode($data);

        if($this->firstNode) {
            $currentNode = $this->firstNode;
            
            while($currentNode !== null) {
                if($currentNode->data === $query) {
                    $newNode->next = $currentNode->next;
                    $currentNode->next = $newNode;
                    $this->totalNodes++;
                    return true;
                }
                $currentNode = $currentNode->next;
            }
        }
        return false;
    }

    public function deleteFirstNode()
    {
        if($this->firstNode !== null) {
            if($this->firstNode->next !== null) {
                $this->firstNode = $this->firstNode->next;
            } else {
                $this->firstNode = null;
            }
            $this->totalNodes--;

            return true;
        }
        return false;
    }

    public function deleteLastNode()
    {
        if($this->firstNode !== null) {
            $currentNode = $this->firstNode;

            if($currentNode->next === null) {
                $this->firstNode = null;
                $this->totalNodes--;
                return true;
            } else {
                $prevNode = null;
                while($currentNode !== null) {
                    if($currentNode->next == null) {
                        $currentNode = null;
                        $prevNode->next = null;
                        $this->totalNodes--;
                        return true;
                    }
                    $prevNode = $currentNode;
                    $currentNode = $currentNode->next;
                }
            }
        }
        return false;
    }

    public function delete(string $query = null)
    {
        if($this->firstNode !== null) {
            $currentNode = $this->firstNode;

            $prevNode = null;
            while($currentNode !== null) {
                if($currentNode->data == $query) {
                    if($currentNode->next === null) {
                        $prevNode->next = null;
                    } else {
                        $prevNode->next = $currentNode->next;
                    }
                    $currentNode = null;
                    $this->totalNodes--;
                    return true;
                }
                $prevNode = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
        return false;
    }

    public function get(int $position = 0)
    {
        $count = 1;

        if($this->firstNode !== null) {
            $currentNode = $this->firstNode;

            while($currentNode !== null) {
                if($count === $position) {
                    return $currentNode;
                }
                $count++;
                $currentNode = $currentNode->next;
            }
        } 
    }

    public function reverse() 
    {  
        if ($this->firstNode !== NULL) {
            if ($this->firstNode->next !== NULL) {
                $reversedList = null;
                $nextNode = null;
                $currentNode = $this->firstNode;
                while($currentNode !== null) {
                    $nextNode = $currentNode->next;
                    $currentNode->next = $reversedList;
                    $reversedList = $currentNode;
                    $currentNode = $nextNode;
                }
                $this->firstNode = $reversedList;
            }  
        }  
    }

    public function getCount()
    {
        $count = 0;
        if($this->firstNode !== null) {
            $currentNode = $this->firstNode;

            while($currentNode !== null) {
                $currentNode = $currentNode->next;
                $count++;
            }
            return $count;
        }
    }

    public function isEmpty()
    {
        return $this->firstNode === null;
    }
}

?>