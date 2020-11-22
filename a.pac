function FindProxyForURL(url, host)
{
	url = url.toLowerCase();
	host = host.toLowerCase();

	if (isPlainHostName(host)){
		return 'DIRECT';
	}

	if (dnsDomainIs(host, ".sharif.ir") || (host == "sharif.ir")
		|| dnsDomainIs(host, ".sharif.edu") || (host == "sharif.edu")){
		return 'DIRECT';
	}

	 if (isResolvable(host)){
		var hostIP = dnsResolve(host);
 
		/* Don't proxy non-routable addresses (RFC 3330) */
		if (isInNet(hostIP, '0.0.0.0', '255.0.0.0') ||
		isInNet(hostIP, '10.0.0.0', '255.0.0.0') ||
		isInNet(hostIP, '127.0.0.0', '255.0.0.0') ||
		isInNet(hostIP, '169.254.0.0', '255.255.0.0') ||
		isInNet(hostIP, '172.16.0.0', '255.240.0.0') ||
		isInNet(hostIP, '192.0.2.0', '255.255.255.0') ||
		isInNet(hostIP, '192.88.99.0', '255.255.255.0') ||
		isInNet(hostIP, '192.168.0.0', '255.255.0.0') ||
		isInNet(hostIP, '198.18.0.0', '255.254.0.0') ||
		isInNet(hostIP, '224.0.0.0', '240.0.0.0') ||
		isInNet(hostIP, '240.0.0.0', '240.0.0.0')){
			return 'DIRECT';
		}
	}

	if (isInNet(host, "192.168.1.1", "255.255.255.0") || 
		isInNet(host, "81.31.160.1", "255.255.224.0") ||
		isInNet(host, "81.31.172.1", "255.255.252.0") ||
		isInNet(host, "81.31.176.1", "255.255.252.0"))
		return "DIRECT"; else return "socks5 213.233.180.4:7088";
}
