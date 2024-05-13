<?php
namespace SinyorHepsiburada\Models\BaseModels\HepsiburadaTypes;

abstract class ClaimStatus
{
    public const AwaitingAction="AwaitingAction";
    public const InDispute="InDispute";
    public const Accepted="Accepted";
    public const Rejected="Rejected";
    public const Refunded="Refunded";
    public const Cancelled="Cancelled";
}