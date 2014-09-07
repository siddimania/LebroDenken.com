<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
	<html>
	<head>
	</head>
	<body>
	
	
	<xsl:for-each select="library/trend">	
	
			<xsl:value-of select="cn" />
			
	</xsl:for-each>
	
	</body>
	</html>
</xsl:template>
</xsl:stylesheet>
