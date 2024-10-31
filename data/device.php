<?php
class Device {
    public $vendor;
    public $serial_number;
    public $mac;
    public $ipv6_support;
    public $tr069_support;
    public $ipoe_support;
    public function __construct($vendor, $serial_number, $mac, $ipv6_support, $tr069_support, $ipoe_support) {
        $this->vendor = $vendor;
        $this->serial_number = $serial_number;
        $this->mac = $mac;
        $this->ipv6_support = $ipv6_support;
        $this->tr069_support = $tr069_support;
        $this->ipoe_support = $ipoe_support;
    }
    public function enable_ipv6($ipv6_address, $ipv6_slaac, $dhcpv6_enable, $dhcpv6_pd_enable) {
        $this->ipv6_address = $ipv6_address;
        $this->ipv6_slaac = $ipv6_slaac;
        $this->dhcpv6_enable = $dhcpv6_enable;
        $this->dhcpv6_pd_enable = $dhcpv6_pd_enable;
        if ($this->dhcpv6_pd_enable == true) {
            $this->dhcpv6_pd = array(
                "dhcpv6_pd_block" => $this->ipv6_address,
                "dhcpv6_pd_address" => "2001:db8:cade:f0ce::/64"
            );
        }
    }
    public function enable_tr069($tr069_address, $tr069_port, $tr069_username, $tr069_password) {
        $this->tr069 = array(
            "tr069_address" => $tr069_address,
            "tr069_port" => $tr069_port,
            "tr069_username" => $tr069_username,
            "tr069_password" => $tr069_password,
        );
    }
}
?>
