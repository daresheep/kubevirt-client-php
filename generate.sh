#!/usr/bin/env bash
SWAGGER_CODEGEN_CLI_SRC=https://repo1.maven.org/maven2/io/swagger/swagger-codegen-cli/2.4.19/swagger-codegen-cli-2.4.19.jar
SWAGGER_CODEGEN_CLI=swagger-codegen-cli.jar
KUBEVIRT_SPEC=https://raw.githubusercontent.com/kubevirt/kubevirt/master/api/openapi-spec/swagger.json

#wget -O "$SWAGGER_CODEGEN_CLI" "$SWAGGER_CODEGEN_CLI_SRC"

java -jar swagger-codegen-cli.jar generate  \
-i "$KUBEVIRT_SPEC" \
-l php \
-c swagger-codegen-config.json

unlink SwaggerClient-php/.gitignore
mv SwaggerClient-php/* ./
rm -rf SwaggerClient-php
